<header class="header">
	<div class="clearfix">
	<div class="container-main">
		<div class="logo-block grid-child">
			<a href="index.php"><img class="logo-img" src="assets/img/nav-logo.svg" alt=""></a>
			<a href="index.php" class="logo"><strong>CMP</strong> Financial</a>
		</div> <!-- /logo-block -->
		<a href="" class="nav-trigger icon-menu"></a>
		<nav class="nav-block">
			<ul class="ul-base nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="team.php">Team</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="#popup-sign-up" class="button button-signup-trigger"><strong>Log In</strong></a></li>
			</ul>
		</nav>
		</div><!-- /container-main -->
	</div><!-- /clearfix -->
</header>

<!-- Lightbox: Sign up content -->
<div id="popup-sign-up" class="popup-inline mfp-hide">
	<div class="heading-block">
		<h2 class="heading-secondary">LOGIN</h2>
		<div class="sub-heading">CMP Financial Portal</div>	
	</div>
  <form class="form-sign-up js-form-validate">
  	<div class="grid-parent">
	  	<div class="field-block sign-up-each grid-child">
	  		<label for="s-username" class="label label-required">Username</label>
	  		<input type="text" class="input-text input-required" id="s-username">
	  	</div>
	  </div> <!-- /grid-parent -->

  	<div class="grid-parent">
	  	<div class="field-block sign-up-each grid-child">
	  		<label for="s-password" class="label label-required">Password</label>
	  		<input type="password" class="input-text input-required" id="s-password">
	  	</div>
	  </div> <!-- /grid-parent -->

  	<div class="field-block">
  		<input type="submit" class="button full-width" value="Sign up">
  	</div>
  </form>
</div> <!-- /popup-inline -->