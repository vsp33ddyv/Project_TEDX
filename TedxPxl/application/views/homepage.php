<!DOCTYPE html>
<html>
	<body>
	<section id="login">
			<section id="innerlogin">
				<img id="logo" src="assets/img/logoPopup.png" alt="logo"/>
				<hr>
				<form>
					<label>E-mail</label>
					<input type="email" size="50" />
					<label>Passwoord</label>
					<input type="password size="50>
					<input id="buttonlogin" type="submit" value="login"/>
				</form>
			</section>
		</section>
	<div id="achtergrond">
	<div>
		<header>
			<img id="logo" src="assets/img/logo.png" alt="logo"/>
			<nav id="hoofdnav">
				<a class="hoofdlink" href="http://www.google.be">Home</a>
				<a class="hoofdlink" href="http://www.google.be">Events</a>
				<a class="hoofdlink" href="http://www.google.be">Forum</a>
				<a class="hoofdlink" href="http://www.google.be">About</a>
				<a class="hoofdlink" href="http://www.google.com">Contact</a>
			</nav>
			<input id="search" type="text"  autocomplete="on" />
			<img src="assets/img/search.png" alt="searchlogo">
		</header>
		<div id="kalender">
			<p>hier komt kalender?</p>
		</div>
		<div id="social">
			<nav id="logonav">
					<a href="https://www.facebook.com/"><img src="assets/img/fbRed.png" alt="facebooklogo"/>
					<a href="https://plus.google.com/"><img src="assets/img/gplogo.png" alt="googlepluslogo"/></a>
					<a href="https://twitter.com/"><img src="assets/img/twittlogo.png" alt="twitterlogo"/></a>
			</nav>
		</div>
		
		<div id="frame">
			<div id="innerbalk">
				<nav id="innernav">
					<a class="innerlinks" href="">nl </a>||
					<a class="innerlinks" href="">eng</a>
					<a id="breadcrumbs" href="">breadcrumbs</a>
					<a id="loginlink" href='#' onclick='overlay();'>log in</a>
				</nav>
			</div>
			<!-- midden scherm 	-->
				<iframe>
				</iframe>
		</div>
	</div>
	</body>	
	<div id="displaybox" style="display: none;"></div>
</html>
