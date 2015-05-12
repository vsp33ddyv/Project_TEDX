<!DOCTYPE html>
<html>
	<head>
		<title>TedPxl</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="public/css/Opmaalx.css" />
		<!-- css werkt -->
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
				<a id="breadcrumbs" href="">
					<?php
						function breadcrumbs($separator = ' &raquo; ', $home = 'Home') {

							$path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
							$base_url = substr($_SERVER['SERVER_PROTOCOL'], 0, strpos($_SERVER['SERVER_PROTOCOL'], '/')) . '://' . $_SERVER['HTTP_HOST'] . '/';
							$breadcrumbs = array("<a href=\"$base_url\">$home</a>");
							$tmp = array_keys($path);
							$last = end($tmp);
							unset($tmp);

							foreach ($path as $x => $crumb) {
								$title = ucwords(str_replace(array('.php', '_'), array('', ' '), $crumb));
							if ($x == 1){
									$breadcrumbs[]  = "<a href=\"$base_url$crumb\">$title</a>";
							}elseif ($x > 1 && $x < $last){
								$tmp = "<a href=\"$base_url";
								for($i = 1; $i <= $x; $i++){
									$tmp .= $path[$i] . '/';
								}
										$tmp .= "\">$title</a>";
								$breadcrumbs[] = $tmp;
								unset($tmp);
								}else{
										$breadcrumbs[] = "$title";
							}
							}

							return implode($separator, $breadcrumbs);
						}	
						echo breadcrumbs();

						?>
				</a>
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
