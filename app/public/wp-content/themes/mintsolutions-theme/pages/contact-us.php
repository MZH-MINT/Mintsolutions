<?php
/**
 * Contact Us page content partial.
 *
 * @package MintSolutions_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<!-- Video banner -->
<section class="inner-banner-otr">
	<video autoplay muted loop playsinline>
		<source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/contactus.mp4" type="video/mp4" />
	</video>
	<div class="container h-100">
		<div class="inner-banner-hero">
			<div class="inner-hero contct-bnr-w">
				<h2>Your <span class="highlight">Next</span> Big Step</h2>
				<h2>Starts <span class="highlight">Here</span></h2>
			</div>
		</div>
	</div>
</section>

<!-- Contact Form -->
<section class="inner-main-wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-sm-12 mx-auto">
				<div class="contactus-form-wrap">
					<div class="contactus-form">
						<div class="breadcump">/GET IN TOUCH <span>WITH US/</span></div>
						<h3>Feel free to say hello!</h3>

						<form id="contactForm" novalidate>
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="input-holder profile">
										<input type="text" name="company_name" placeholder="Company Name*" required />
									</div>
								</div>

								<div class="col-lg-12 col-md-12">
									<div class="input-holder profile">
										<input type="text" name="full_name" placeholder="Full Name*" required />
									</div>
								</div>

								<div class="col-lg-12 col-md-12">
									<div class="input-holder phone">
										<div class="form-group code-rltv">
											<span class="border-end country-code">
												<select name="country_code">
													<option value="+1">+1 (USA)</option>
													<option value="+44">+44 (UK)</option>
													<option value="+61">+61 (Australia)</option>
													<option value="+65">+65 (Singapore)</option>
													<option value="+81">+81 (Japan)</option>
													<option value="+82">+82 (South Korea)</option>
													<option value="+91">+91 (India)</option>
													<option value="+971">+971 (UAE)</option>
													<option value="+92">+92 (Pakistan)</option>
													<option value="+60">+60 (Malaysia)</option>
													<option value="+62">+62 (Indonesia)</option>
													<option value="+86">+86 (China)</option>
													<option value="+33">+33 (France)</option>
													<option value="+49">+49 (Germany)</option>
													<option value="+39">+39 (Italy)</option>
													<option value="+34">+34 (Spain)</option>
													<option value="+55">+55 (Brazil)</option>
													<option value="+7">+7 (Russia)</option>
												</select>
											</span>
											<input type="tel" name="phone" placeholder="Phone Number*" required />
										</div>
									</div>
								</div>

								<div class="col-lg-12 col-md-12">
									<div class="input-holder mail">
										<input type="email" name="email" placeholder="Email*" required />
									</div>
								</div>

								<div class="col-lg-12 col-md-12 message">
									<div class="input-holder">
										<textarea name="message" cols="1" rows="3" placeholder="Tell us in brief about your biggest challenges today!*" required></textarea>
									</div>
								</div>

								<div class="col-lg-12 col-md-12">
									<button type="submit" class="rto-btn btn-x-bounce sbt-btn sbm-btn">
										<span>Submit</span>
									</button>
								</div>

								<div class="col-lg-12 col-md-12" id="formMsg" style="margin-top:12px;"></div>
							</div>
						</form>
					</div>

					<!-- Side image -->
					<figure class="abt-img">
						<div class="grdnt-overlay"></div>
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/contact-img.jpg" alt="Contact Us" />
					</figure>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Address & Contact Info -->
<section class="career-join-wrap contact-bg">
	<div class="container h-100">
		<div class="contct-add-wrap">
			<div class="get-wrap">
				<div class="dtl-box">
					<h3><span>Get in touch</span> <br />with us</h3>
					<p>We love to create things with fun, and with open-minded people.</p>
				</div>
				<div class="dtl-box">
					<div class="mail-contet">
						<div class="icon">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/mail-icon.png" alt="Mail" />
						</div>
						<a href="mailto:sales@mintsolutions.ae">sales@mintsolutions.ae</a>
					</div>
					<div class="mail-contet">
						<div class="icon">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/phone-icon.png" alt="Phone" />
						</div>
						<a href="tel:+97148748544">+971 4 874 8544</a>
					</div>
				</div>
			</div>
			<div class="ofc-add-wrap">
				<div class="dtl-box">
					<h3><span>Office</span> <br />Address</h3>
					<p>We love to create things with fun, and with open-minded people.</p>
				</div>
				<div class="dtl-box">
					<div class="mail-contet align-items-start">
						<div class="icon">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/addres-icon.png" alt="Address" />
						</div>
						<div style="width: 77%">
							<p>
								901, Fortune Towers, Cluster-C Jumeirah Lake Towers Dubai United
								Arab Emirates
							</p>
							<a target="_blank" href="https://maps.app.goo.gl/hgFpARMx67iwvtAk8" class="lc">View
								Location</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
