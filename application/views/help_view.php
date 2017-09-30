<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>MSG91 SMS Gateway Help | Codeigniter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/js/bootstrap.min.js" />
	
</head>
<body>

<!-- Bootstrap 4 Navbar  -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<a href="<?php echo base_url(); ?>" class="navbar-brand">MSG91 SMS Gateway</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

	<div class="collapse navbar-collapse" id="navbarsExampleDefault">

		<ul class="navbar-nav ml-auto">

			<li class="nav-item ">
				<a href="https://facebook.com/anburocky3" class="nav-link" target="_blank">#Developer</a>
			</li>

			<li class="nav-item active">
				<a href="<?php echo base_url(); ?>Welcome/help" class="nav-link">Help Article</a>
			</li>

			<li class="nav-item">
				<a href="https://facebook.com/cdudenetworks" class="nav-link" target="_blank">Support</a>
			</li>

		</ul>

	</div>
	
</nav>
<!-- End Bootstrap 4 Navbar -->

<div class="container mt-5">
	<div class="row">	
		<div class="col-md-12">
			<div class="card">
				<h5 class="card-header bg-primary text-white">Help in Integrating MSG91 SMS Gateway</h5>
				<div class="card-body">
					<div style="line-height:3rem">
						<h6>Quick steps to integrate to your web/app on the go!</h6>
						<ol>
							<li> Clone the repository <code>git clone https://github.com/anburocky3/MSG91-SMS-Gateway-Codeigniter-integration.git</code> </li>
							<li> Open Terminal, type<code>cd MSG91-SMS-Gateway-Codeigniter-integration</code> </li>
							<li> Copy<code>Welcome.php</code> controller file in<code>applications/controllers/</code>directory</li>
							<li> Copy<code>Msg91.php</code> library file in<code>applications/libraries</code>directory</li>
							<li> Enter Msg91 Authentication key <code>(Authkey)</code> and <code>Sender ID</code> on <code>line 11,12</code></li>
							<li> Copy<code>message_form.php</code>view file in<code>applications/views/</code>directory</li>
							<li> Customize the controller logic according to your web/app. </li>

						</ol>	
					</div>

					<div class="card-footer">
						<h6><strong>Code Explanation</strong></h6>
						<ol>
							<li><em>Welcome.php</em> Controller - Displays the message_form.php view page.</li>
							<li><em>Msg91.php</em> library file -  Takecares all msg91 sms sending logic. More info on <a href="https://msg91.com/sms-for-developers" target="_blank">MSG91 SMS for developers site</a></li>
							<li><em>Welcome.php/help</em> Method - Displays the quick integration help page.</li>
						</ol>

						<p class="mt5">Note: Never forget to autoload the library & helper files on <code>applications/config/autoload.php</code> file.</p>
					</div>

				</div>
			</div>
		</div>
        
    </div>
   

	<!-- Footer -->
	<hr>
	<footer>
		<p class="float-left">Copyright &copy; <?php echo date('Y'); ?>  </p>
			<span class="float-right">Coded with Love &hearts;	: <a href="https://facebook.com/anburocky3" target="_blank">Anbuselvan Rocky</a></span>	
	</footer>
</div> 

</body>
</html>