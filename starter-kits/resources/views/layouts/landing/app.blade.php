<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="index, follow" />
	<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon 80x80.png" />
	<link rel="apple-touch-icon" sizes="167x167" href="assets/images/favicon 80x80.png" />
	<link rel="icon" type="image/png" href="assets/images/favicon 80x80.png" sizes="64x64" />
	<link rel="icon" type="image/png" href="assets/images/favicon 80x80.png" sizes="32x32" />
	<link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon 80x80.png" />
	<link rel="icon" type="image/png" href="assets/images/favicon 80x80.png" sizes="16x16" />

	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Home | FATHFORCE">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="FATHFORCE">
	<meta property="og:title" content="Home | FATHFORCE">
	<meta property="og:image" content="http://resources/photo-1503334849647-1d48ae0ba696.jpg">

	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

	<title>Home | FATHFORCE</title>
	<link rel="stylesheet" type="text/css" media="all" href="../../landing/assets/css/style.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
	<div class="hero" id="hero">
		<nav class="navbar navbar-expand-lg">
			<a class="navbar-brand" href="https://fathforce.com"><img
					src="../../landing/assets/images/Logo-Fathforce-White-New-Persegi-Transparant.png" width="1024" height="300"
					alt="Fathforce" />
				<span class="navbar-title">FATHFORCE</span>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.html" rel="" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="blog.html" rel="" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="gallery.html" rel="" class="nav-link">Gallery</a></li>
					<li class="nav-item"><a href="about.html" rel="" class="nav-link">About Us</a></li>
					<!-- <li class="nav-item"><a href="login.html" rel="" class="nav-link">Login</a></li>
					<li class="nav-item"><a href="register.html" rel="" class="nav-link">Register</a></li> -->
				</ul>
				<div class="dropdown">
					<a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
						data-bs-toggle="dropdown" aria-expanded="false">
						JOIN NOW
					</a>

					<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<li><a class="dropdown-item" href="login.html">LOGIN</a></li>
						<li><a class="dropdown-item" href="register.html">REGISTER</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="hero-content" id="hero">
			<h1 class="hero-title">FATHFORCE</h1>
			<h2 class="hero-slogan">Learn & Growth Together</h2>
		</div>

		<div class="hero-background"></div>
	</div>

@yield('content')

	<script type="text/javascript" src="../../landing/assets/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>
</body>

</html>
