<!DOCTYPE html>
<html>
	<body>
	<section id="login">
			<section id="innerlogin">
				<img id="logo" src="assets/img/logoPopup.png" alt="logo"/>
				<hr>
				 <?php echo form_open("user/login"); ?>
						<input class="invoer" type="email" size="30" placeholder="E-mail" name="email"/>
						<input class="invoer" type="password" size="30" placeholder="Paswoord" name="pass"/>
						<input id="buttonlogin" type="submit" value="login" name="submit"/>
						<a id="facebooklogin">facebook login</a>
						<a id="googlelogin">google+ login</a>
				<?php echo form_close(); ?>
			</section>
	</section>
		<div id="fade" onclick="document.getElementById('login').style.display='none'; document.getElementById('registratie').style.display='none'; document.getElementById('fade').style.display='none'"
				href="javascript:void(0)">
		</div>
		
		<section id="registratie">
			<section>
				<img id="logo" src="assets/img/logoPopup.png" alt="logo"/>
				<hr>
				<?php echo form_open("user/registration"); ?>
					<p>
						<label>Voornaam:</label>
						<input type="text" class="invoer" name="voornaam" placeholder="voornaam" value=""<?php echo set_value('voornaam'); ?> />
					</p>
					<p>
						<label id="labelemail">E-mail: </label>
						<input type="email" class="invoer" name="email_address" placeholder="E-mail" value=""<?php echo set_value('email_address'); ?> />
					</p>
					<p>
						<label>Paswoord: </label>
						<input type="password" class="invoer" name="password" placeholder="Paswoord" value=""<?php echo set_value('password'); ?> />
					</p>
					<p>
						<label>Bevestig paswoord: </label>
						<input type="password" class="invoer" name="con_password" placeholder="CBevestig paswoord" value=""<?php echo set_value('con_password'); ?> />
					</p>
					<input type="submit" Value="Registreer je"/>
				<?php echo form_close(); ?>
			</section>
		</section>
		
		<!--<div class="fade" onclick="document.getElementById('registratie').style.display='none';document.getElementById('fade').style.display='none'"
				href="javascript:void(0)">
		</div> -->
		
	<div>
		<header>
			<img id="logo" src="assets/img/logo.png" alt="logo"/>
			<nav id="hoofdnav">
				<a target="kader" class="hoofdlink" href="Homepage/view_list("home_view")">Home</a>
				<a class="hoofdlink" href="Homepage/view_list("events_view")">Events</a>
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
					<a class="loginlink" onclick="document.getElementById('registratie').style.display='block';document.getElementById('fade').style.display='block'"
						href="javascript:void(0)">Registreer</a>
					<a id="breadcrumbs" href="">breadcrumbs</a>
					<a class="loginlink" onclick="document.getElementById('login').style.display='block';document.getElementById('fade').style.display='block'"
						href="javascript:void(0)">log in</a>
					
				</nav>
			</div>
			
				
			<!-- midden scherm 	-->
			<!--	<iframe src="home_view.php" id="kader"></iframe> -->
		</div>
	
	</body>	
</html>
