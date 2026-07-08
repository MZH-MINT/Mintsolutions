<?php
/**
 * Solutions page content partial.
 *
 * @package MintSolutions_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$theme_uri = esc_url( get_template_directory_uri() );
?>

<section class="inner-banner-otr">
	<video autoplay muted loop playsinline>
		<source src="<?php echo $theme_uri; ?>/assets/videos/about-hero.mp4" type="video/mp4" />
	</video>
	<div class="container h-100">
		<div class="inner-banner-hero">
			<div class="inner-hero solution-hero-w">
				<h2><span class="highlight">Smarter</span> Solutions</h2>
				<h2><span class="highlight">Stronger</span> Organizations.</h2>
			</div>
		</div>
	</div>
</section>

<section class="inner-main-wrap">
	<section class="section-solutions">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 mx-auto">
					<div class="container text-center">
						<div class="breadcump">/Inspire.Captivate. <span>Innovate/</span></div>
						<h3>Our <span>Solutions.</span></h3>
					</div>

					<div class="solution-artical inner-solution-box">
						<div class="solution-slide-discr">
							<img class="s-logo" src="<?php echo $theme_uri; ?>/assets/images/logos/safetymint.png" alt="SAFETYMINT" />
							<div class="slider-b-wrap">
								<div class="btm-dsctn">
									<h6>Safety Management</h6>
									<h3>Ensuring workplace health and safety is more critical than ever.</h3>
								</div>
								<div class="btm-btns">
									<a href="#enquirNow" class="rto-btn rto-wht-btn btn-x-bounce" data-bs-toggle="modal" data-bs-target="#enquirNow">
										<span>Request for Demo</span>
									</a>
									<a href="#" class="website-link">Visit Website</a>
								</div>
							</div>
						</div>
						<picture>
							<img src="<?php echo $theme_uri; ?>/assets/images/solution-img01.jpg" alt="Safety Management solution" />
						</picture>
					</div>

					<div class="solution-artical inner-solution-box">
						<div class="solution-slide-discr">
							<div class="slider-b-wrap">
								<div class="btm-dsctn">
									<h6>Safety Management</h6>
									<h3>Ensuring workplace health and safety is more critical than ever.</h3>
								</div>
								<div class="btm-btns">
									<a href="#enquirNow" class="rto-btn rto-wht-btn btn-x-bounce" data-bs-toggle="modal" data-bs-target="#enquirNow">
										<span>Request for Demo</span>
									</a>
									<a href="#" class="website-link">Visit Website</a>
								</div>
							</div>
						</div>
						<picture>
							<img src="<?php echo $theme_uri; ?>/assets/images/solution-img02.jpg" alt="Solution showcase" />
						</picture>
					</div>

					<div class="solution-artical inner-solution-box">
						<div class="solution-slide-discr">
							<div class="slider-b-wrap">
								<div class="btm-dsctn">
									<h6>Safety Management</h6>
									<h3>Ensuring workplace health and safety is more critical than ever.</h3>
								</div>
								<div class="btm-btns">
									<a href="#enquirNow" class="rto-btn rto-wht-btn btn-x-bounce" data-bs-toggle="modal" data-bs-target="#enquirNow">
										<span>Request for Demo</span>
									</a>
									<a href="#" class="website-link">Visit Website</a>
								</div>
							</div>
						</div>
						<picture>
							<img src="<?php echo $theme_uri; ?>/assets/images/solution-img03.jpg" alt="Solution showcase" />
						</picture>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>

<section class="discover-section">
	<div class="discover-contant-wrap">
		<div class="discover-contant">
			<h2>Seamless. <br /> Secure. Scalable.</h2>
			<p>Discover how we can solve your business problems</p>
			<a class="rto-btn btn-x-bounce" href="#enquirNow" data-bs-toggle="modal" data-bs-target="#enquirNow">
				<span>Request a FREE Demo</span>
			</a>
		</div>
	</div>
</section>
