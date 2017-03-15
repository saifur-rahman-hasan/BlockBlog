<?php
	
	require_once 'app/start.php';

	if(!is_logged_in()){
		header('Location: login.php?alert=1');
	}
	
	include 'template/html_start.php';
	include 'template/header.php';
?>

<!-- Body Wrapper -->
<div class="body-wrapper">

	<div class="container">
		
		<!-- Global Alert -->
		<div class="alert alert-warning">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Title!</strong> Alert body ...
		</div>
		<!-- End Global Alert -->

		
		<div class="row">

			<!-- Left Side -->
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<div class="thumbnail">
					<img src="http://placehold.it/350x250" alt="X's profile Photo">
					<div class="caption">
						<h3>User Full Name</h3>
						<p>
							example@email.com
						</p>
						<p>
							<a href="#" class="btn btn-sm btn-primary">Change photo</a>
							<a href="#" class="btn btn-sm btn-default">Update Profile</a>
						</p>
					</div>
				</div>		
			</div>	
			<!-- End Left Side -->

			<!-- Right Side -->
			<div class="col-sm-9">
				
			</div>
			<!-- End Right Side -->
		</div>
		

	</div>
</div>
<!-- End Body Wrapper -->

<?php
	include 'template/footer.php';
	include 'template/html_stop.php';
?>