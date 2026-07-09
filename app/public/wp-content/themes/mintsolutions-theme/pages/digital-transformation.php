<?php
/**
 * Digital Transformation page content partial.
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
						<div class="breadcump">/Build Smarter,<span> Operate Faster/</span></div>
						<h3>Digital <span>Transformation.</span></h3>

						<div class="consulting-menu">
							<div class="menu-item digit-line" data-target="design">
								<div class="border-one"></div>
								<h3>Business Process Automation</h3>
								<div class="content-box-otr">
									<div class="content-box" id="design">
										<p>
											We transform repetitive, manual tasks into intelligent,
											automated workflows. Whether it&rsquo;s operations, finance, HR,
											or administration processes, we eliminate inefficiencies,
											improve turnaround time, and reduce reliance on spreadsheets
											without disrupting how your teams already work.
										</p>
										<a href="#enquirNow" class="rto-btn c-box btn-x-bounce" data-bs-toggle="modal" data-bs-target="#enquirNow"><span>Let&rsquo;s Connect</span></a>
									</div>
								</div>
							</div>

							<div class="menu-item" data-target="architecture">
								<div class="border-two"></div>
								<h3>AI/ML Implementation</h3>
								<div class="content-box-otr">
									<div class="content-box" id="architecture">
										<p>
											Embed machine learning into day-to-day operations, from forecasting
											and operation optimization to anomaly detection. Our solutions are
											tailored to real datasets, built for scale, and designed to adapt as
											your operations evolve, no heavy retraining or downtime required.
										</p>
										<a href="#enquirNow" class="rto-btn c-box btn-x-bounce" data-bs-toggle="modal" data-bs-target="#enquirNow"><span>Let&rsquo;s Connect</span></a>
									</div>
								</div>
							</div>

							<div class="menu-item" data-target="stack">
								<div class="border-three"></div>
								<h3>Mobile Solutions</h3>
								<div class="content-box-otr">
									<div class="content-box content-box-thre" id="stack">
										<p>
											Put your operations in your pocket. From field teams to
											executives, access tools, data, and workflows anywhere.
											Secure, fast, and reliable, so decisions don&rsquo;t have to wait for a desktop.
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
							<img src="<?php echo $theme_uri; ?>/assets/images/solution-cs-img.jpg" alt="Digital Transformation" />
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
