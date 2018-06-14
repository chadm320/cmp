<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>CMP Financial | Contact</title>
		<?php include "includes/head.php"; ?>
	</head>

	<body>
		<?php include "includes/header.php"; ?>
		<main class="main">
		<div class="background-block background-block--contact">
				<section class="container-mid">
					<div class="background-block-content address-block animated animatedFadeInUp fadeInUp">
						<div class="heading-block">
							<h1 class="heading-primary">Get in touch</h1>
							<div class="sub-heading">We're located in the heart of San Diego's financial district</div>							
						</div>
						<h2 class="heading-secondary">Our Location</h2>	
						<p><span class="icon-location_on icon-left"></span>One America Plaza 600 W Broadway. San Diego, CA 92101</p>
						<p><span class="icon-phone_on icon-left"><i class="fas fa-phone"></i></span>(619) 555-5555</p>
						<p><span class="icon-phone_on icon-left"><i class="far fa-envelope"></i></span>contact@cmpfinancial.com</p>							
					</div> <!-- /address-block -->
				</section>
				<div class="overlay"></div>					
			</div> <!-- /background-block -->

			<div class="email-block">
				<div class="container-main">
					<div class="grid-parent">
						<div class="grid-child email-each">
							<div class="email-each-type">Retirement Planning</div>
							<a href="#">
								<span class="icon-round-wrap">
									<span class="icon-mail dead-center"></span>
								</span>
								<div><strong>retirement@cmpfinancial.com</strong></div>
							</a>
						</div> <!-- /email-each -->

						<div class="grid-child email-each">
							<div class="email-each-type">Investments</div>
							<a href="#">
								<span class="icon-round-wrap">
									<span class="icon-mail dead-center"></span>
								</span>
								<div><strong>investments@cmpfinancial.com</strong></div>
							</a>
						</div> <!-- /email-each -->

						<div class="grid-child email-each">
							<div class="email-each-type">Insurance</div>
							<a href="#">
								<span class="icon-round-wrap">
									<span class="icon-mail dead-center"></span>
								</span>
								<div><strong>insurance@cmpfinancial.com</strong></div>
							</a>
						</div> <!-- /email-each -->
				  </div> <!-- /grid-parent -->
			  </div><!-- /container-main -->
		  </div> <!-- /email-block -->

			<div class="map-google-embed">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3356.8545384677104!2d-117.1699623990705!3d32.71649279327903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d954abc5f71d91%3A0x63bf61e7da42a91b!2sOne+America+Plaza%2C+600+W+Broadway%2C+San+Diego%2C+CA+92101!5e0!3m2!1sen!2sus!4v1527201656447" width="800" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

			<div class="form-join-block">
					<form class="form-join js-form-validate">
						<div class="heading-block">
							<h2 class="heading-secondary">Contact Us</h2>
							<div class="sub-heading">Evening and weekend appointments are available. Please call us or contact an advisor to schedule an appointment.</div>
						</div>
						<div class="container-mid">
							<div class="grid-parent">
								<div class="grid-child form-join-each">
									<div class="field-block">
										<label for="join-input-name" class="label label-required">Your name</label>
										<input type="text" class="input-text input-required" id="join-input-name">								
									</div>									
								</div>

								<div class="grid-child form-join-each">
									<div class="field-block">
										<label for="join-input-tel" class="label label-required">Phone number</label>
										<input type="text" class="input-text input-required" id="join-input-tel">								
									</div>									
								</div>
								
								<div class="grid-child form-join-each">
									<div class="field-block">
										<label for="join-input-email" class="label label-required">Your email</label>
										<input type="email" class="input-text input-required" id="join-input-email">
									</div>
								</div>
							</div> <!-- /grid-parent -->

							<div class="field-block">
								<label for="join-input-info" class="label label-required">Financial Need</label>
								<select id="join-input-info" class="input-text input-required">
									<option value="">Select a Option</option>
									<option value="retirement-planning">Retirement Planning</option>
									<option value="cash-flow-management-strategies">Cash Flow Management Strategies</option>
									<option value="investments">Investments</option>
								</select>
							</div>

							<div class="field-block">
								<label for="join-input-info" class="label label-required">Message</label>
								<textarea class="input-text input-required" id="join-input-info"></textarea>
							</div>

							<div class="field-block center">
								<input type="submit" class="button" value="Get in touch">
							</div>						
						</div> <!-- /container-mid -->
					</form>
				</div> <!-- /form-join-block -->
			</section> <!-- /join-block -->
		</main>
		<?php include "includes/footer.php"; ?>
		<?php include "includes/js-global.php"; ?>
	</body>
	
</html>
