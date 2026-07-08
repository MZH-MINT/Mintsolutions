<?php
/**
 * Theme footer.
 *
 * @package MintSolutions_Theme
 */
?>
	<footer<?php echo is_page( 'salesforce' ) ? ' class="salesforce-f"' : ''; ?>>
		<div class="container">
			<div class="f-border"></div>
			<div class="row">
				<div class="col-xl-3 col-lg-4 col-md-5">
					<div class="f-abt">
						<a title="Mint Solutions FZCO" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="f-logo">
							<?php if ( is_page( 'salesforce' ) ) : ?>
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-v2.png" alt="Mint Solutions FZCO" />
							<?php else : ?>
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-black-v2.png" alt="Mint Solutions FZCO" />
							<?php endif; ?>
						</a>
						<p>
							At Mint Solutions FZCO, we understand that change is not always
							easy. Since 2017, we&rsquo;ve been helping companies of all sizes respond
							to industry transitions in order to stay competitive.
						</p>
						<div class="f-sm-icons">
							<ul>
								<li><a href="" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
								<li><a href="" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
								<li><a href="" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
								<li><a href="" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-xl-9 col-lg-8 col-md-7">
					<div class="f-nav">
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Discover</a></li>
							<li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a></li>
							<li><a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>">Careers</a></li>
							<li><a href="<?php echo esc_url( home_url( '/contactus/' ) ); ?>">Contact Us</a></li>
						</ul>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li>
							<li><a href="<?php echo esc_url( home_url( '/digital-transformation/' ) ); ?>">Digital Transformation</a></li>
							<li><a href="<?php echo esc_url( home_url( '/solution-consulting/' ) ); ?>">Solution Consulting</a></li>
							<li><a href="<?php echo esc_url( home_url( '/managed-services/' ) ); ?>">Managed Services</a></li>
							<li><a href="<?php echo esc_url( home_url( '/it-staffing/' ) ); ?>">IT Staffing</a></li>
						</ul>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>">Solutions</a></li>
							<li><a href="#solution-saftymind" data-bs-toggle="modal" data-bs-target="#solution-saftymind">SAFETYMINT</a></li>
							<li><a href="#solution-saftymind" data-bs-toggle="modal" data-bs-target="#solution-saftymind">HAL EDGECATION</a></li>
							<li><a href="#solution-saftymind" data-bs-toggle="modal" data-bs-target="#solution-saftymind">HAL BUSINESS SUCCESS</a></li>
						</ul>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/contactus/' ) ); ?>">Get In Touch</a></li>
							<li><a href="tel:+97148748544">+971 4874 8544</a></li>
							<li><a class="mail" href="mailto:sales&#64;mintsolutions.ae">sales&#64;mintsolutions.ae</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-12">
					<div class="f-adrs">
						<p>&copy; 2025 by Mint Solutions FZCO</p>
						<ul>
							<li><a href="#">Terms &amp; Conditions</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="modal fade" id="enquirNow" tabindex="-1" aria-labelledby="enquirNowLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="enquirNowLabel">Request a free Demo</h5>
					<button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">X</button>
				</div>
				<div class="modal-body">
					<div class="enquirNow">
						<article>
							<form id="requestDemoForm" class="request-demo-form" method="post" action="#" novalidate>
								<div class="row">
									<div class="col-12">
										<div class="input-holder profile">
											<input type="text" name="company_name" placeholder="Company Name*" />
										</div>
									</div>
									<div class="col-12">
										<div class="input-holder profile">
											<input type="text" name="full_name" placeholder="Full Name*" />
										</div>
									</div>
									<div class="col-12">
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
														<option value="+91" selected>+91 (India)</option>
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
												<input type="tel" name="phone" placeholder="Phone Number*" />
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="input-holder mail">
											<input type="email" name="email" placeholder="Email*" />
										</div>
									</div>
									<div class="col-12">
										<div class="input-holder">
											<textarea name="message" id="Message" rows="3" placeholder="Tell us in brief about your biggest challenges today!*"></textarea>
										</div>
									</div>
									<div class="col-12">
										<button type="submit" class="rto-btn btn-x-bounce"><span>Submit</span></button>
									</div>
								</div>
							</form>
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="solution-saftymind" tabindex="-1" aria-labelledby="enquirNowLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-solution modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">SAFETYMINT</h5>
					<button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">X</button>
				</div>

				<div class="modal-body">
					<div class="solution-artical inner-solution-box">
						<div class="solution-slide-discr">
							<img class="s-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/safetymint.png" alt="SAFETYMINT logo"/>
							<div class="slider-b-wrap">
								<div class="btm-dsctn">
									<h6>Safety Management</h6>
									<h3>Ensuring workplace health and safety is more critical than ever.</h3>
								</div>
								<div class="btm-btns">
									<a href="#" class="rto-btn rto-wht-btn btn-x-bounce" data-bs-toggle="modal" data-bs-target="#enquirNow"><span>Request for Demo</span></a>
									<a href="#" class="website-link" target="_blank">Visit Website</a>
								</div>
							</div>
						</div>
						<picture>
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/solution-img01.jpg" alt="SAFETYMINT image"/>
						</picture>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			if (typeof window.initSitePlugins === 'function') {
				window.initSitePlugins(document);
			}
		});
	</script>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
