<?php
	require_once 'app/start.php';

	if(is_logged_in()){
		header('Location: home.php');
	}

	include 'template/html_start.php';
	include 'template/header.php';
?>

<!-- Body Wrapper -->
<div class="body-wrapper">

	<div class="container">
		
		<!-- Global Alert -->
		<?php if(isset($_GET['alert']) && $_GET['alert'] == 1): ?>
		<div class="alert alert-warning">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Warning!</strong> Sorry you have no permission to view that page before login.
		</div>
		<?php endif; ?>
		<!-- End Global Alert -->

		<!-- Login Form -->
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				
				<?php

					$error = [];

					if(isset($_POST['login_submit'])){
						
						$email 		= $_POST['email'];
						$password 	= $_POST['password'];

						if(empty($email)){
							$error['email'] = "Please enter your account email id.";
						}

						if(empty($password)){
							$error['password'] = "Please enter your account password.";
						}

						if(!empty($email) && !empty($password)){

						}

					}
				?>

				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
						
					<legend class="legend">Log In to your account</legend>

					<div class="form-group <?php echo ($error['email']) ? 'has-error' : ''; ?>">
						<input type="text" name="email" placeholder="Email" class="form-control" value="<?php get_value('email'); ?>">
						<?php if(isset($error['email'])): ?>
							<span class="help-block"><?php echo $error['email']; ?></span>
						<?php endif; ?>
					</div>

					<div class="form-group <?php echo ($error['password']) ? 'has-error' : ''; ?>">
						<input type="password" name="password" placeholder="Password" class="form-control">
						<?php if(isset($error['password'])): ?>
							<span class="help-block"><?php echo $error['password']; ?></span>
						<?php endif; ?>
					</div>

					<div class="form-group">
						<input type="submit" name="login_submit" value="Log In" class="btn btn-block btn-default">
					</div>
					
					<div class="form-group clearfix">
						<a href="forgot_password.html" class="pull-left">Forgot password?</a>
						<a href="signup.html" class="pull-right">Need an account?</a>
					</div>

				</form>

			</div>
		</div>
		<!-- End Login Form -->

	</div>
</div>
<!-- End Body Wrapper -->

<?php
	include 'template/footer.php';
	include 'template/html_stop.php';
?>

