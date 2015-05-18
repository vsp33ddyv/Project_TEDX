<!DOCTYPE html>
<html>
	<body>
	<section id="login">
			<section id="innerlogin">
				<img id="logo" src="assets/img/logoPopup.png" alt="logo"/>
				<hr>
				<form>
					<input class="invoer" type="email" size="30" placeholder="E-mail"/>
					<input class="invoer" type="password" size="30" placeholder="Paswoord" />
					<input id="buttonlogin" type="submit" value="login"/>
					<a id="facebooklogin">facebook login</a>
					<a id="googlelogin">google+ login</a>
				</form>
			</section>
	</section>
		<div id="fade" onclick="document.getElementById('login').style.display='none';document.getElementById('fade').style.display='none'"
    href="javascript:void(0)"></div>
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
					<a id="loginlink" onclick="document.getElementById('login').style.display='block';document.getElementById('fade').style.display='block'"
						href="javascript:void(0)">log in</a>
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
