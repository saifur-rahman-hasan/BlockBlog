Header -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">

		<!-- Navbar Brand And Collapse Toggle Menu -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-header-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="fa fa-lg fa-bars"></span>
			</button>
			<a class="navbar-brand" href="index.html">Blockblog</a>
		</div>
		<!-- End Navbar Brand And Collapse Toggle Menu -->

		<!-- Navbar Collapse -->
		<div class="collapse navbar-collapse navbar-header-collapse">
			
			<!-- Navbar Search Form -->
			<?php if(is_logged_in()): ?>
			<form action="search.html" method="GET" class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" name="query" class="form-control" placeholder="Search...">
				</div>
				<button type="submit" class="btn btn-default"><i class="fa fa-lg fa-search"></i></button>
			</form>
			<?php endif; ?>
			<!-- End Navbar Search Form -->
			
			<!-- Signup & Login Links -->
			<?php if(!is_logged_in()): ?>
			<div class="navbar-right navbar-btn-group">
				<a href="login.php" class="btn navbar-btn btn-default">Log In</a>
				<a href="signup.php" class="btn navbar-btn btn-default">Sign Up</a>
			</div>
			<?php endif; ?>
			<!-- End Signup & Login Links -->
			
			<!--Navbar User Info -->
			<?php if(is_logged_in()): ?>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="home.php"><i class="fa fa-lg fa-fw fa-home"></i> Home</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Full Name
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="fa fa-lg fa-fw fa-user"></i>Profile</a></li>
						<li><a href="#"><i class="fa fa-lg fa-fw fa-pencil"></i>Update Profile</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="logout.php"><i class="fa fa-lg fa-fw fa-power-off"></i>Log Out</a></li>
					</ul>
				</li>
			</ul>
			<?php endif; ?>
			<!-- End Navbar User Info -->
		</div>
		<!-- End Navbar collapse -->
	</div>
</nav>
<!-- End Header