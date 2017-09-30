<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>MSG91 Integration in Codeigniter</title>
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

			<li class="nav-item">
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
				<h5 class="card-header bg-primary text-white">MSG91 SMS Area</h5>
				<div class="card-body">
					<?php if (validation_errors()): ?>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Error!</strong> <?php echo validation_errors(); ?>
						</div>
					<?php endif ?>

					<?php if ($this->session->userdata('update_status')): ?>
						<?php echo $this->session->userdata('update_status'); ?>
					<?php endif ?>
					<form action="" method="POST">
						<div class="form-group">
							<label for="sendTo">Send to: </label>
							<input type="number" name="sendTo" id="sendTo" class="form-control" placeholder=" 918939745741, 9568745784" required="required" value="<?php echo set_value("sendTo"); ?>">
						</div>

						<div class="form-group">
							<label for="message">Message: </label>
							<textarea name="message" id="message" class="form-control" rows="3" required="required" placeholder="Enter your message"><?php echo set_value("message"); ?></textarea>
						</div>

						<div class="form-group">
							<button class="btn btn-secondary" type="reset">Reset</button>
							<button class="btn btn-primary" type="submit">Send Message</button>
						</div>
					</form>
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