<?php
/**
 * Services page content partial.
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
			<div class="inner-hero service-hero-w">
				<h2>Design-Led. <span class="highlight">Outcome</span>-Driven.</h2>
				<h2>Built for <span class="highlight">Impact.</span></h2>
			</div>
		</div>
	</div>
</section>

<section class="inner-main-wrap">
	<section class="section-services">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 col-lg-12 col-md-12 mx-auto text-center">
					<div class="breadcump">/OUR <span>SERVICES/</span></div>
					<h3>Streamlined Services <br /> <span>for Real-World Impact</span></h3>

					<div class="services-wrap" id="digital">
						<div class="services-img">
							<div class="picture">
								<a href="<?php echo esc_url( home_url( '/digital-transformation/' ) ); ?>">
									<img src="<?php echo $theme_uri; ?>/assets/images/services-img01.jpg" alt="Digital Transformation" />
								</a>
							</div>
						</div>
						<i></i>
						<div class="services-detail">
							<h3>Digital <span>Transformation</span></h3>
							<p>
								Our mission is to guide enterprises and SMBs on a transformative
								journey that drives technology and data-driven business outcomes,
								enabling them to innovate, evolve, and lead in their industries.
							</p>
							<a href="<?php echo esc_url( home_url( '/digital-transformation/' ) ); ?>" class="lm-btn btn-x-bounce">Learn More</a>
						</div>
					</div>

					<div class="services-wrap even-add" id="application">
						<div class="services-img">
							<div class="picture">
								<a href="<?php echo esc_url( home_url( '/solution-consulting/' ) ); ?>">
									<img src="<?php echo $theme_uri; ?>/assets/images/services-img02.jpg" alt="Solution Consulting" />
								</a>
							</div>
						</div>
						<i></i>
						<div class="services-detail">
							<h3>Solution <span>Consulting</span></h3>
							<p>
								From ideation to execution, we guide you in crafting the right
								digital solutions. Our consulting services ensure a future-ready
								foundation with a user-first mindset and scalable architecture.
							</p>
							<a href="<?php echo esc_url( home_url( '/solution-consulting/' ) ); ?>" class="lm-btn btn-x-bounce">Learn More</a>
						</div>
					</div>

					<div class="services-wrap">
						<div class="services-img">
							<div class="picture">
								<a href="<?php echo esc_url( home_url( '/managed-services/' ) ); ?>">
									<img src="<?php echo $theme_uri; ?>/assets/images/services-img03.jpg" alt="Managed Services" />
								</a>
							</div>
						</div>
						<i></i>
						<div class="services-detail">
							<h3>Managed <span>Services</span></h3>
							<p>
								Focus on your business while we manage the rest. Our managed
								services ensure your applications and infrastructure are always
								optimized, secure, and scalable.
							</p>
							<a href="<?php echo esc_url( home_url( '/managed-services/' ) ); ?>" class="lm-btn btn-x-bounce">Learn More</a>
						</div>
					</div>

					<div class="services-wrap">
						<div class="services-img">
							<div class="picture">
								<a href="<?php echo esc_url( home_url( '/it-staffing/' ) ); ?>">
									<img src="<?php echo $theme_uri; ?>/assets/images/services-img04.jpg" alt="IT Staffing" />
								</a>
							</div>
						</div>
						<i></i>
						<div class="services-detail">
							<h3>IT <span>Staffing</span></h3>
							<p>
								Scale your team with skilled professionals who seamlessly
								integrate with your workflow. We provide flexible staffing
								solutions that match the pace and scale of your growth.
							</p>
							<a href="<?php echo esc_url( home_url( '/it-staffing/' ) ); ?>" class="lm-btn btn-x-bounce">Learn More</a>
						</div>
					</div>

					<div class="services-wrap">
						<div class="services-img">
							<div class="picture">
								<a href="<?php echo esc_url( home_url( '/our-expertise/' ) ); ?>">
									<img src="<?php echo $theme_uri; ?>/assets/images/services-img05.jpg" alt="Smart and Trusted Hiring" />
								</a>
							</div>
						</div>
						<i></i>
						<div class="services-detail">
							<h3>Smart &amp; Trusted <span>Hiring</span></h3>
							<p>
								A collaboration uniting background screening expertise with IT innovation to help UAE business build safer,
								compliant, future-ready workforces.
							</p>
							<a href="<?php echo esc_url( home_url( '/our-expertise/' ) ); ?>" class="lm-btn btn-x-bounce">Learn More</a>
						</div>
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
