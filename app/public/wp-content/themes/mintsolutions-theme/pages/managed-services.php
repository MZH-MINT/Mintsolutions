<?php
/**
 * Managed Services page content partial.
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
			<div class="inner-hero solution-bnr-w">
				<h2>Comprehensive</h2>
				<h2><span class="highlight">Digital Solution</span> Consulting</h2>
			</div>
		</div>
	</div>
</section>

<div class="solution-cons-content">
	<section class="inner-main-wrap">
		<div class="container">
			<section class="solution-consulting">
				<div class="consulting-container">
					<div class="consulting-left">
						<div class="breadcump">/Scalable &amp; Proactive<span> Tech Support/</span></div>
						<h3>Managed <span>Services.</span></h3>

						<div class="consulting-menu">
							<div class="menu-item manged-line" data-target="design">
								<div class="border-one"></div>
								<h3>Application Maintenance</h3>
								<div class="content-box-otr">
									<div class="content-box" id="design">
										<p>
											We take care of continuous performance management, hotfixes, and iterative improvements through agile software maintenance cycles,
											ensuring ongoing stability, better performance execution, and fewer user issues without disrupting your daily operations or service uptime.
										</p>
										<a href="#enquirNow" class="rto-btn c-box btn-x-bounce" data-bs-toggle="modal" data-bs-target="#enquirNow"><span>Let&rsquo;s Connect</span></a>
									</div>
								</div>
							</div>

							<div class="menu-item manged-line" data-target="architecture">
								<div class="border-two"></div>
								<h3>Infrastructure Management</h3>
								<div class="content-box-otr">
									<div class="content-box" id="architecture">
										<p>
											Your infrastructure is monitored and managed 24/7 to keep performance steady and issues resolved fast.
											From real-time health checks to scalable cloud design, we make sure your systems are always running at their best as your business grows.
										</p>
										<a href="#enquirNow" class="rto-btn c-box btn-x-bounce" data-bs-toggle="modal" data-bs-target="#enquirNow"><span>Let&rsquo;s Connect</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="consulting-content">
						<div class="image-view active" id="default-view">
							<div class="grdnt-overlay"></div>
							<img src="<?php echo $theme_uri; ?>/assets/images/solution-cs-img.jpg" alt="Managed Services" />
						</div>
					</div>
				</div>
			</section>
		</div>
	</section>
</div>

<section class="discover-section">
	<div class="discover-contant-wrap">
		<div class="discover-contant">
			<h2>Seamless. <br /> Secure. Scalable.</h2>
			<p>Discover how we can solve your business problems</p>
			<a href="#enquirNow" class="rto-btn btn-x-bounce" data-bs-toggle="modal" data-bs-target="#enquirNow"><span>Request a FREE Demo</span></a>
		</div>
	</div>
</section>
