<?php
	require_once 'app/start.php';
	include 'template/html_start.php';
	include 'template/header.php';
?>

<!-- Body Wrapper -->
<div class="body-wrapper">

	<div class="container">
		
		<!-- Global Alert -->
		<div class="alert alert-info">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Title!</strong> Alert body ...
		</div>
		<!-- End Global Alert -->

		<!-- Welcome Jumboo -->
		<div class="jumbotron">
			<div class="container text-center">
				<h1>Blockblog</h1>
				<p>Write your word & let people know</p>

				<!-- Signup & Login Links -->
				<?php if(!is_logged_in()): ?>
				<p>
					<a class="btn btn-default">Sign up now</a>
					<a class="btn btn-default">Log In</a>
				</p>
				<?php endif; ?>
				<!-- End Signup & Login Links -->
			</div>
		</div>
		<!-- End Welcome Jumboo -->

		<!-- Latest Blog Item [ List 20 ] -->

		<div class="page-header">
			<h3>Recent blog posts</h3>
		</div>

		<div class="row">
			<div class="col-sm-4">
				<div class="thumbnail">
					<img src="http://placehold.it/350x250" alt="Blog Post Image">
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
						</p>
						<p>
							<a href="details.html?id=x" class="btn btn-default" role="button">Read More</a>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="thumbnail">
					<img src="http://placehold.it/350x250" alt="Blog Post Image">
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
						</p>
						<p>
							<a href="details.html?id=x" class="btn btn-default" role="button">Read More</a>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="thumbnail">
					<img src="http://placehold.it/350x250" alt="Blog Post Image">
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
						</p>
						<p>
							<a href="details.html?id=x" class="btn btn-default" role="button">Read More</a>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="thumbnail">
					<img src="http://placehold.it/350x250" alt="Blog Post Image">
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
						</p>
						<p>
							<a href="details.html?id=x" class="btn btn-default" role="button">Read More</a>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="thumbnail">
					<img src="http://placehold.it/350x250" alt="Blog Post Image">
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
						</p>
						<p>
							<a href="details.html?id=x" class="btn btn-default" role="button">Read More</a>
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="thumbnail">
					<img src="http://placehold.it/350x250" alt="Blog Post Image">
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
						</p>
						<p>
							<a href="details.html?id=x" class="btn btn-default" role="button">Read More</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- End Latest Blogs Item [ List 20 ] -->

	</div>
</div>
<!-- End Body Wrapper -->

<?php
	include 'template/footer.php';
	include 'template/html_stop.php';
?>