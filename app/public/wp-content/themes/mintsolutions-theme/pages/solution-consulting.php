<?php
/**
 * Solution Consulting page content partial.
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
						<div class="breadcump">/Experience<span>-Driven Tech Solutions/</span></div>
						<h3>Solution <span>Consulting.</span></h3>

						<div class="consulting-menu">
							<div class="menu-item" data-target="design">
								<div class="border-one"></div>
								<h3>Product Design (UX/UI)</h3>
								<div class="content-box-otr">
									<div class="content-box" id="design">
										<p>
											Intuitive, accessible interfaces built from detailed user journey maps, wireframes, and usability testing.
											Designs focus on reducing friction, enhancing engagement, and encouraging adoption across devices while
											staying aligned with brand identity and user behavior.
										</p>
										<a href="#enquirNow" class="rto-btn c-box btn-x-bounce" data-bs-toggle="modal" data-bs-target="#enquirNow"><span>Let&rsquo;s Connect</span></a>
									</div>
								</div>
							</div>

							<div class="menu-item" data-target="architecture">
								<div class="border-two"></div>
								<h3>Solution Architecture</h3>
								<div class="content-box-otr">
									<div class="content-box" id="architecture">
										<p>
											We build modular, scalable, and secure systems that adapt to cloud, hybrid, or legacy environments.
											Each architecture is designed for smooth integration, minimal risk through phased rollouts, and the flexibility
											to grow with evolving business demands.
										</p>
										<a href="#enquirNow" class="rto-btn c-box btn-x-bounce" data-bs-toggle="modal" data-bs-target="#enquirNow"><span>Let&rsquo;s Connect</span></a>
									</div>
								</div>
							</div>

							<div class="menu-item" data-target="stack">
								<div class="border-three"></div>
								<h3>Technology Stack</h3>
								<div class="content-box-otr">
									<div class="content-box content-box-thre" id="stack">
										<p>
											Carefully selected front-end, back-end, and infrastructure technologies that match business goals,
											scale effectively, and leverage existing team capabilities. Recommendations emphasize future readiness,
											strong performance, and effective compatibility across platforms and tools.
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
							<img src="<?php echo $theme_uri; ?>/assets/images/solution-cs-img.jpg" alt="Solution Consulting" />
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
