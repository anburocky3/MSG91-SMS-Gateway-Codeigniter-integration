# # MSG91-SMS-Gateway-Codeigniter-integration

#Screenshots
![Screenshot 1](https://s25.postimg.org/w8ztm8a7j/Screenshot_9.png)

[url=http://postimg.org/image/amkt57bmz/][img]https://s25.postimg.org/amkt57bmz/Screenshot_9.png[/img][/url]
[url=http://postimg.org/image/c1mdtxkfv/][img]https://s25.postimg.org/c1mdtxkfv/Screenshot_8.png[/img][/url]
[url=http://postimg.org/image/gnii2ador/][img]https://s25.postimg.org/gnii2ador/Screenshot_7.png[/img][/url]

<h3>Quick steps to integrate to your web/app on the go!</h3>
<ol>
	<li> Clone the repository <code>git clone https://github.com/anburocky3/MSG91-SMS-Gateway-Codeigniter-integration.git</code> </li>
	<li> Open Terminal, type <code>cd MSG91-SMS-Gateway-Codeigniter-integration</code> </li>
	<li> Copy <code>Welcome.php</code> controller file in <code>applications/controllers/</code> directory</li>
	<li> Copy<code>Msg91.php</code> library file in <code>applications/libraries</code> directory</li>
	<li> Enter Msg91 Authentication key <code>(Authkey)</code> and <code>Sender ID</code> on <code>line 11,12</code></li>
	<li> Copy <code>message_form.php</code> view file in <code>applications/views/</code> directory</li>
	<li> Customize the controller logic according to your web/app. </li>

</ol>	
<hr>
<h3><strong>Code Explanation</strong></h3>
<ol>
	<li><em>Welcome.php</em> Controller - Displays the message_form.php view page.</li>
	<li><em>Msg91.php</em> library file -  Takecares all msg91 sms sending logic. More info on <a href="https://msg91.com/sms-for-developers" target="_blank">MSG91 SMS for developers site</a></li>
	<li><em>Welcome.php/help</em> Method - Displays the quick integration help page.</li>
</ol>

<p class="mt5">Note: Never forget to autoload the library & helper files on <code>applications/config/autoload.php</code> file.</p>
