<!DOCTYPE html>
<html>
<header>
<script type="text/javascript">

</script>
</header>
	<body>
	<section id="login">
			<section id="innerlogin">
				<img id="logo" src="assets/img/logoPopup.png" alt="logo"/>
				<hr>
				 <?php echo form_open("user/login"); ?>
						<input class="invoer" type="email" size="30" placeholder="E-mail" name="email"/>
						<input class="invoer" type="password" size="30" placeholder="Paswoord" name="pass"/>
						<input id="buttonlogin" type="submit" value="login" name="btn-login"/>
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
						<input type="text" class="invoer" name="first_name" placeholder="voornaam" value=""<?php echo set_value('first_name'); ?> />
					</p>
					<p>
						<label>Achternaam:</label>
						<input type="text" class="invoer" name="last_name" placeholder="achternaam" value=""<?php echo set_value('last_name'); ?> />
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
						<input type="password" class="invoer" name="con_password" placeholder="Bevestig paswoord" value=""<?php echo set_value('con_password'); ?> />
					</p>
					<input type="submit" Value="Registreer je" id="buttonregistratie" name="btn-reg"/>
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
				<a class="hoofdlink" href="<?php $page='home_view'; ?>">Home</a>
				<a class="hoofdlink" href="<?php $page='events_view';?>">Events</a>
				
				<a class="hoofdlink" href="<?php echo site_url(); ?>/../../forum">Forum</a>
				<a class="hoofdlink" href="<?php $page='about_view';?>">About</a>
				<a class="hoofdlink" href="<?php $page='contact_view';?>">Contact</a>
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
			<div id="main_content">
			<?php 
			$page = 'home_view';
			$this->load->view($page); ?>
			</div>
				
			<!-- midden scherm 	-->
			<!--	<iframe src="home_view.php" id="kader"></iframe> -->
		</div>
	
	</body>	
</html>