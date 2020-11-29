<script type="text/javascript" src="js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/bootstrap.js"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="articles.php">Articles</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="photos.php">Photos</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="aboutme.php">About Me</a>
			</li>
		</ul>
		<ul class="navbar-nav">
			<li class="nav-itme">
				<?php 
				session_start();
				if (isset($_SESSION['login'])) {
					echo '<a class="nav-link" href="logout.php">Logout</a>';
				}else{
					echo '<a class="nav-link" href="login.php">Login</a>';
				}
				?>
			</li>
		</ul>
	</div>
</nav>