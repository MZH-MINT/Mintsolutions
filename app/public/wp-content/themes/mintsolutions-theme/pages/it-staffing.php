<?php
/**
 * IT Staffing page content partial.
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
						<div class="breadcump">/Tap into Proven<span> Tech Talent/</span></div>
						<h3>IT <span>Staffing.</span></h3>

						<div class="consulting-menu">
							<div class="menu-item" data-target="design">
								<div class="border-one"></div>
								<h3>Onsite &amp; Offshore</h3>
								<div class="content-box-otr">
									<div class="content-box" id="design">
										<p>
											With a registered local presence in Dubai, we bring credibility and the ability to work closely with your team on-site.
											At the same time, our strong network in India allows us to provide offshore consultants who bring cost efficiency without
											compromising quality. We ensure smooth onboarding, scheduling, and timezone alignment so you don&rsquo;t have to.
										</p>
										<a href="#enquirNow" class="rto-btn c-box btn-x-bounce" data-bs-toggle="modal" data-bs-target="#enquirNow"><span>Let&rsquo;s Connect</span></a>
									</div>
								</div>
							</div>

							<div class="menu-item manged-line it-staffing-line-two" data-target="architecture">
								<div class="border-two"></div>
								<h3>Short-Term &amp; Long-Term</h3>
								<div class="content-box-otr">
									<div class="content-box" id="architecture">
										<p>
											Our UAE presence allows us to arrange short-term visas or provide professionals on Mint&rsquo;s payroll for contract roles,
											reducing significant cost and effort for our clients. For long-term initiatives, our experienced recruitment team matches
											skilled resources to your project scope, onboarding pace, and performance expectations, ensuring efficient project execution.
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
							<img src="<?php echo $theme_uri; ?>/assets/images/solution-cs-img.jpg" alt="IT Staffing" />
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
