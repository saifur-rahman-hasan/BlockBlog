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

		<!-- Login Form -->
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				
				<?php

					$error = false;

					if(isset($_POST['signup_submit'])){
						
						if(empty($_POST['name'])){
							$error_name = 'Please enter your full name.';
							$error = true;
						}

						if(empty($_POST['email'])){
							$error_email = 'Please enter your email id.';
							$error = true;
						}

						if(empty($_POST['password'])){
							$error_password = 'Please choose your account password.';
							$error = true;
						}

						if(empty($_POST['password_confirm'])){
							$error_password_confirm = 'Your password confirmation cannot be empty.';
							$error = true;
						}
			
						if(!preg_match('/^[a-zA-Z\s]*$/', $_POST['name'])){
							$error_name = 'Please enter your real full name.';
							$error = true;
						}
						
						if(is_valid_email($_POST['email'])){
							$error_email = 'Please enter a valid email id.';
							$error = true;
						}

						if(!empty($_POST['password']) && strlen($_POST['password']) < 6){
							$error_password = 'Please choose your password minimum 6 charecters.';
							$error = true;
						}

						if(!empty($_POST['password']) && strlen($_POST['password']) > 36){
							$error_password = 'Please choose your password maximum 36 charecters.';
							$error = true;
						}

						if($_POST['password'] <> $_POST['password_confirm']){
							$error_password_confirm = 'Your password & password confirmation doesn\'t match.';
							$error = true;
						}

						if(is_exists('email')){
							$error_email = 'Sorry! this email id is already in used.';
							$error = true;
						}

						if($error == false){
							$password = md5($_POST['password']);

							$SQL_create = "INSERT INTO users (email, password, name) VALUES ('{$_POST['email']}', '{$password}', '{$_POST['name']}')";

							$user_create = $db->query($SQL_create);

							if($user_create == true){
								header("Location: login.php");
							}
						}

					}

				?>
				
				<!-- Signup Form -->
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
						
					<legend class="legend">Create a free account</legend>

					<div class="form-group <?php echo (isset($error_name)) ? 'has-error' : ''; ?>">
						<input type="text" name="name" placeholder="Full name" class="form-control" value="<?php get_value('name'); ?>">
						<?php if(isset($error_name)): ?>
						<span class="help-block"><?php echo $error_name; ?></span>
						<?php endif; ?>
					</div>
					
					<div class="form-group <?php echo (isset($error_email)) ? 'has-error': ''; ?>">
						<input type="text" name="email" placeholder="Your email" class="form-control" value="<?php get_value('email'); ?>">
						<?php if(isset($error_email)): ?>
						<span class="help-block"><?php echo $error_email; ?></span>
						<?php endif; ?>
					</div>

					<div class="form-group <?php echo (isset($error_password)) ? 'has-error': ''; ?>">
						<input type="password" name="password" placeholder="Choose a password" class="form-control">
						<?php if(isset($error_password)): ?>
						<span class="help-block"><?php echo $error_password; ?></span>
						<?php endif; ?>
					</div>

					<div class="form-group <?php echo (isset($error_password_confirm)) ? 'has-error': ''; ?>">
						<input type="password" name="password_confirm" placeholder="Confirm password" class="form-control">
						<?php if(isset($error_password_confirm)): ?>
						<span class="help-block"><?php echo $error_password_confirm; ?></span>
						<?php endif; ?>
					</div>

					<div class="form-group">
						<input type="submit" name="signup_submit" value="Sign Up" class="btn btn-block btn-default">
					</div>
					
					<div class="form-group text-center">
						Already have an account? Please <a href="login.html">Log In</a>
					</div>

				</form>
				<!-- End Signup Form -->

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