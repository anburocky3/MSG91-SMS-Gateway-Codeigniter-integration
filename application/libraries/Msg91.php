<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* MSG91 Library file
* Author: Anbuselvan Rocky (www.fb.me/anburocky3)
* No Licence bullshit! Use it according to your logic!
*/
class Msg91 {

	public function __construct () {
		$this->ci =& get_instance();
        $this->authKey = "YOUR-AUTH-KEY";
        $this->senderID = "YOUR-SENDER-ID";
	}

    public function send($to, $message) {
        //Your message to send, Add URL encoding here.
        $message = urlencode($message);

        //Define route
        $route = "4";

        //Prepare you post parameters
        $postData = '{
            "sender": "'.$this->senderID.'",
            "route": "'.$route.'",
            "country": "91",
            "sms": [
                {
                    "message": "'.$message.'",
                    "to": [
                        "'.$to.'"
                    ]
                }
            ]
        }';        

        //API URL
        $url="http://api.msg91.com/api/v2/sendsms";

        // init the resource
        $ch = curl_init();
        curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",

        // CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postData,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => array(
            "authkey: $this->authKey",
            "content-type: application/json"),
        ));

        //get response
        $response = curl_exec($ch);
        $err = curl_error($ch);
        
        curl_close($ch);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {

            $result = json_decode($response);

            if ($result->type === "success") {
                return TRUE;
            } else {

                return FALSE;
            }        
        }

        
	}

}





























?>