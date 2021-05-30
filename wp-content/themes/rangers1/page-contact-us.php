<?php get_header() ?>



<?php
if (have_posts()) :
	while (have_posts()) : the_post();
		get_template_part('template-parts/page/breadcrumb', null, [
			'page_title' => get_the_title()
		]);

?>

		<!-- Contact Section Start -->
		<div class="contact-page-section sec-spacer">
			<div class="container">
				<div id="googleMap"></div>
				<div class="map-text">
					<h3>LOCATION</h3>
					<?php the_content() ?>
				</div>
				<div class="row contact-address-section">
					<div class="col-md-4 contact-pd">
						<div class="contact-address">
							<i class="fa fa-map-marker"></i>
							<h4> <?php the_content() ?>
							</h4>
							<p>503 Old Buffalo Street</p>
							<p>Northwest #205, New York-3087</p>
						</div>
					</div>
					<div class="col-md-4 contact-pd">
						<div class="contact-phone">
							<i class="fa fa-phone"></i>
							<h4>Phone Number</h4>
							<a href="tel:+3453-909-6565">+3453-909-6565</a>
							<a href="tel:+2390-875-2235">+2390-875-2235</a>
						</div>
					</div>
					<div class="col-md-4 contact-pd">
						<div class="contact-email">
							<i class="fa fa-envelope"></i>
							<h4>Email Address</h4>
							<a href="mailto:infoname@gmail.com">
								<p>infoname@gmail.com</p>
							</a>
							<a href="#">
								<p>www.yourname.com</p>
							</a>
						</div>
					</div>
				</div>

				<div class="contact-comment-section">
					<h3>Contact Form</h3>
					<div id="form-message"></div>
					<form id="contact-form" method="post" action="mailer.php">
						<fieldset>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label>First Name*</label>
										<input name="fname" id="fname" class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label>Last Name*</label>
										<input name="lname" id="lname" class="form-control" type="text">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label>Email*</label>
										<input name="email" id="email" class="form-control" type="email">
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label>Subject *</label>
										<input name="subject" id="subject" class="form-control" type="text">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<label>Message *</label>
										<textarea cols="40" rows="10" id="message" name="message" class="textarea form-control"></textarea>
									</div>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="form-group mb-0">
										<input class="btn-send" type="submit" value="Submit Now">
									</div>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
				<!-- Contact Section Start -->
				<div class="contact-page-section sec-spacer">
					<div class="container">
						<div id="googleMap"></div>
						<div class="map-text">
							<h3>LOCATION</h3>
							<p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is has been the industry’s stasn ndard dummy text ever since the 1500s, when an unknown printer took a galley of it to make. Lorem Ipsum is the simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indus try’s standard they dummy text ever since.</p>
						</div>
						<div class="row contact-address-section">
							<div class="col-md-4 contact-pd">
								<div class="contact-address">
									<i class="fa fa-map-marker"></i>
									<h4>Address</h4>
									<p>503 Old Buffalo Street</p>
									<p>Northwest #205, New York-3087</p>
								</div>
							</div>
							<div class="col-md-4 contact-pd">
								<div class="contact-phone">
									<i class="fa fa-phone"></i>
									<h4>Phone Number</h4>
									<a href="tel:+3453-909-6565">+3453-909-6565</a>
									<a href="tel:+2390-875-2235">+2390-875-2235</a>
								</div>
							</div>
							<div class="col-md-4 contact-pd">
								<div class="contact-email">
									<i class="fa fa-envelope"></i>
									<h4>Email Address</h4>
									<a href="mailto:infoname@gmail.com">
										<p>infoname@gmail.com</p>
									</a>
									<a href="#">
										<p>www.yourname.com</p>
									</a>
								</div>
							</div>
						</div>

						<div class="contact-comment-section">
							<h3>Contact Form</h3>
							<div id="form-message"></div>
							<form id="contact-form" method="post" action="mailer.php">
								<fieldset>
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
												<label>First Name*</label>
												<input name="fname" id="fname" class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
												<label>Last Name*</label>
												<input name="lname" id="lname" class="form-control" type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
												<label>Email*</label>
												<input name="email" id="email" class="form-control" type="email">
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
												<label>Subject *</label>
												<input name="subject" id="subject" class="form-control" type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="form-group">
												<label>Message *</label>
												<textarea cols="40" rows="10" id="message" name="message" class="textarea form-control"></textarea>
											</div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="form-group mb-0">
												<input class="btn-send" type="submit" value="Submit Now">
											</div>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<!-- Contact Section End -->

			</div>
		</div>
		<!-- Contact Section End -->
<?php



	endwhile;

else :

	get_template_part('template-parts/content', 'none');

endif;
?>


<?php get_footer() ?>