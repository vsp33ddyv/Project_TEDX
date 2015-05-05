<!DOCTYPE html>
<html>
	<head>
		<title>TedPxl</title>
		<meta charset="UTF-8" />
		<link href="<?= base_url();?>assets/css/Opmaalx.css" rel="stylesheet" type="text/css" />
		
		<!-- css werkt nier, vindt map niet-->
		<script></script>
	</head>
	
	<body>
	<div>
		<header>
			<img id="logo" src="public/img/logo.png" alt="logo"/>
			<nav id="hoofdnav">
				<a class="hoofdlink" href="http://www.google.be">Home</a>
				<a class="hoofdlink" href="http://www.google.be">Events</a>
				<a class="hoofdlink" href="http://www.google.be">Blog</a>
				<a class="hoofdlink" href="http://www.google.be">About</a>
				<a class="hoofdlink" href="http://www.google.com">Contact</a>
			</nav>
			<input id="search" type="text"  autocomplete="on" />
			<img src="public/img/search.png" alt="searchlogo">
		</header>
		<div id="kalender">
			<p>hier komt kalender?</p>
		</div>
		<div id="social">
			<nav id="logonav">
					<a href="https://www.facebook.com/"><img src="public/img/fbRed.png" alt="facebooklogo"/>
					<a href="https://plus.google.com/"><img src="public/img/gplogo.png" alt="googlepluslogo"/></a>
					<a href="https://twitter.com/"><img src="public/img/twittlogo.png" alt="twitterlogo"/></a>
			</nav>
		</div>
		
		<div id="frame">
		<div id="innerbalk">
			<nav id="innernav">
				<a class="innerlinks" href="">nl </a>||
				<a class="innerlinks" href="">eng</a>
				<a id="breadcrumbs" href="">breadcrumbs</a>
				<a id="login" href="">log in</a>
			</nav>
		</div>
		
		<!-- midden scherm 	-->
			<iframe>
			</iframe>
			
	
		</div>
			<footer>
			&copy;Britt Nida Julio Jasper
		</footer>
		
	</div>
	</body>
	
	
	
</html>
