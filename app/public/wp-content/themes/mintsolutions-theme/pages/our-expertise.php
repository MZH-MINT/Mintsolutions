<?php
/**
 * Our Expertise page content partial.
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
		<source src="<?php echo $theme_uri; ?>/assets/videos/our-expertise-banner.mp4" type="video/mp4" />
	</video>
	<div class="container h-100">
		<div class="inner-banner-hero">
			<div class="inner-hero service-hero-w">
				<h2>Reliable <span class="highlight">Background Checks</span></h2>
				<h2><span class="highlight">Confident</span> Hires</h2>
			</div>
		</div>
	</div>
</section>

<section class="inner-main-wrap inner-main-content services-container">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 mx-auto text-center">
				<div class="breadcump">/Verified <span>Workforce/</span></div>
				<h3>
					Build a Trusted Workforce in the UAE with <br />
					<small>Unmatched Background Screening</small>
				</h3>

				<picture class="services-top-img">
					<div class="services-top-img-sf">
						<a href="#thealliance" class="services-sf-btn">
							<i></i>A Powerful Partnership
						</a>

						<h3>
							Make every hiring decision <br />
							confident, compliant, <br />
							and risk-free.
						</h3>
					</div>
					<img src="<?php echo $theme_uri; ?>/assets/images/main-services-img01.jpg" alt="Trusted workforce" />
				</picture>
			</div>
		</div>
	</div>

	<section class="partnership">
		<div class="breadcump">/A Powerful <span>Partnership/</span></div>
		<h2>
			Empowering Smarter Hiring Decisions Through
			<span>Technology</span> and <span>Trust</span>
		</h2>

		<div class="detail-wrp">
			<p>
				A collaboration that bridges background screening expertise and IT
				innovation to help UAE businesses build safer, compliant, and
				future-ready workforces.
			</p>
			<a href="#thesolution" class="bottom-link book-now">
				Explore Our Screening Solutions
			</a>
		</div>
	</section>

	<div class="container-fluid sticky-bg" id="stickyNav">
		<section class="tab-container">
			<div class="tab-header st-tabs" id="menu-center">
				<ul class="st-tabs-container">
					<li><a class="st-tab active" href="#whyitmatters">WHY This Partnership Exists</a></li>
					<li><a class="st-tab" href="#thesolution">What We Deliver</a></li>
					<li><a class="st-tab" href="#thealliance">How We Make It Happen</a></li>
					<li><a class="st-tab" href="#prooftestimonials">Trusted Industries</a></li>
					<li><a class="st-tab" href="#aboutalliance">Who We Empower</a></li>
					<li><a class="st-tab" href="#whereweoperate">Where We Operate</a></li>
				</ul>
			</div>
		</section>
	</div>

	<div class="container-fluid p-0" id="whyitmatters">
		<section class="tab-container">
			<div class="why-matters">
				<div class="row">
					<div class="col-lg-6">
						<div class="why-matters-dsptn">
							<div class="breadcump">/WHY This <span>Partnership Exists/</span></div>
							<h3>
								Make every hiring decision
								<span>confident,<br />compliant,</span>
								and <span>risk-free.</span>
							</h3>

							<p>
								In today&rsquo;s fast-paced UAE market, every hiring decision shapes a
								company&rsquo;s reputation. Organizations need a way to verify talent
								efficiently, comply with regulations, and protect brand
								integrity especially when hiring from global talent pools.
							</p>

							<p>
								This partnership was born from a shared vision: to combine deep expertise in background
								screening with cutting-edge IT solutions, creating a unified
								platform that simplifies verification, strengthens compliance, and empowers
								businesses to make confident, informed decisions.
							</p>
						</div>
					</div>

					<div class="col-lg-6">
						<picture>
							<img src="<?php echo $theme_uri; ?>/assets/images/main-services-img02.jpg" class="img-rds-none w-100 img-cover" alt="Background screening partnership" />
						</picture>
					</div>
				</div>
			</div>
		</section>
	</div>

	<section class="green-patern-bg" id="thesolution">
		<div class="container">
			<div class="row">
				<div class="col-xl-5 col-lg-7">
					<div class="green-patern-dspt">
						<div class="breadcump">/What We <span>Deliver/</span></div>
						<h3>
							Make hiring simpler, faster, and fully compliant
							<span>from day one.</span>
						</h3>

						<p>
							Together, we provide an integrated suite of employee background verification solutions
							designed to meet the diverse needs of UAE-based enterprises.
						</p>

						<ul>
							<li>Real-time employment, education, and criminal record checks</li>
							<li>Global database access for international candidate screening</li>
							<li>Automated workflows to accelerate onboarding</li>
							<li>Data security and compliance aligned with UAE regulations</li>
						</ul>

						<p>
							By blending reliable verification with seamless technology delivery, we ensure accuracy,
							transparency, and efficiency at every step.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="sub-services" id="thealliance">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="serv-box">
						<div class="breadcump">/How We <span>Make It Happen/</span></div>
						<h3>
							Collaborative, clear, and compliant <br />
							screening designed for every industry.
						</h3>

						<p>
							Our approach is built on collaboration and clarity.
							The partnership integrates advanced verification systems
							with local support in the UAE to ensure faster turn around
							and culturally attuned service delivery.
						</p>

						<p>
							From initial screening requests to final verified reports, every process is supported by automation,
							AI-driven data checks, and human oversight ensuring precision and compliance across all industries.
						</p>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="sub-serv-img-wrp">
						<img src="<?php echo $theme_uri; ?>/assets/images/sub-srv-img.jpg" class="img-rds-none" alt="UAE expertise" />
						<div class="sub-serv-ditail">
							<h3>UAE Expertise,<br />Simplified Partnership</h3>
							<a href="#enquirNow" class="bottom-link bottom-link-wt" data-bs-toggle="modal" data-bs-target="#enquirNow">
								Let&rsquo;s Build <span>Together</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="client-indestries" id="prooftestimonials">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="breadcump">/Trusted <span>Industries/</span></div>
					<h3>Our Clients and Industries</h3>
					<p>We serve a wide spectrum of UAE industries where trust and reliability define success</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-12 industries-slid">
					<section class="deck" id="deck">
						<article class="panel active" style="background-image:url('<?php echo $theme_uri; ?>/assets/images/patern-bg.jpg')">
							<div class="inner">
								<p class="desc">Our Clients and Industries</p>
								<h3>Driver and Chauffeur Services</h3>
							</div>
						</article>

						<article class="panel active" style="background-image:url('<?php echo $theme_uri; ?>/assets/images/patern-bg.jpg')">
							<div class="inner">
								<p class="desc">Our Clients and Industries</p>
								<h3>Hypermarket and Retail Chains</h3>
							</div>
						</article>

						<article class="panel active" style="background-image:url('<?php echo $theme_uri; ?>/assets/images/patern-bg.jpg')">
							<div class="inner">
								<p class="desc">Our Clients and Industries</p>
								<h3>Information Technology Firms</h3>
							</div>
						</article>

						<article class="panel active" style="background-image:url('<?php echo $theme_uri; ?>/assets/images/patern-bg.jpg')">
							<div class="inner">
								<p class="desc">Our Clients and Industries</p>
								<h3>Healthcare and Hospital Networks</h3>
							</div>
						</article>

						<article class="panel active" style="background-image:url('<?php echo $theme_uri; ?>/assets/images/patern-bg.jpg')">
							<div class="inner">
								<p class="desc">Our Clients and Industries</p>
								<h3>Jewellery and Luxury Retail</h3>
							</div>
						</article>
					</section>
				</div>
			</div>
		</div>
	</section>

	<section class="who-we-empower" id="aboutalliance">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcump">/Who We <span>Empower/</span></div>
					<h3>Built for leaders who demand speed, accuracy, <br />and complete hiring confidence.</h3>
				</div>
				<div class="col-md-4">
					<div class="sub-serv-img-wrp">
						<img src="<?php echo $theme_uri; ?>/assets/images/empower-img01.jpg" class="img-rds-none" alt="HR leaders" />

						<div class="sub-serv-ditail">
							<h3>HR Leaders seeking fast, accurate verification results</h3>
							<a href="#enquirNow" class="bottom-link bottom-link-wt" data-bs-toggle="modal" data-bs-target="#enquirNow">Talk to Ou<span>r Experts</span></a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="sub-serv-img-wrp">
						<img src="<?php echo $theme_uri; ?>/assets/images/empower-img02.jpg" class="img-rds-none" alt="Compliance teams" />

						<div class="sub-serv-ditail">
							<h3>Compliance Teams needing end-to-end transparency</h3>
							<a href="#enquirNow" class="bottom-link bottom-link-wt" data-bs-toggle="modal" data-bs-target="#enquirNow">Start You<span>r Project </span></a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="sub-serv-img-wrp">
						<img src="<?php echo $theme_uri; ?>/assets/images/empower-img01.jpg" class="img-rds-none" alt="Business executives" />

						<div class="sub-serv-ditail">
							<h3>Business Executives focused on reducing risk and building brand trust</h3>
							<a href="#enquirNow" class="bottom-link bottom-link-wt" data-bs-toggle="modal" data-bs-target="#enquirNow">Start You<span>r Project </span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="abt-the-alliancce" id="whereweoperate">
		<div class="container-fluid no-gutters">
			<div class="row">
				<div class="col-lg-6 p-0">
					<img src="<?php echo $theme_uri; ?>/assets/images/discussion-img.jpg" alt="Where we operate" class="img-rds-none dtl-img" />
				</div>
				<div class="col-lg-6 p-0">
					<div class="alliancce-detail-wrp">
						<div class="alliancce-detail-sect">
							<div class="breadcump">/Where We <span>Operate/</span></div>
							<h3>Fast, culturally aligned, and fully compliant <br />screening across the UAE.</h3>
							<p>Rooted in the UAE, our partnership ensures localized service with global
								reach. With a dedicated presence in Dubai, and support across
								Abu Dhabi, Sharjah, and other Emirates, we provide businesses
								with quick access, cultural understanding, and region specific
								compliance expertise.</p>
							<p>We are committed to supporting UAE organizations in building trustworthy, future-ready
								workforces one verification at a time.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="service-footer" id="thesolution-footer">
		<div class="container">
			<div class="services-f-box">
				<div class="row p-0">
					<div class="col-xl-7 col-lg-6 col-md-6 p-0"><img src="<?php echo $theme_uri; ?>/assets/images/advantage-bottom-img.jpg" alt="Verification journey" class="img-rds-none" /></div>
					<div class="col-xl-5 col-lg-6 col-md-6 p-0">
						<div class="services-f-box-dtl">
							<h3>Build a Workforce You Can Trust</h3>
							<p>Discover how technology and expertise unite to deliver seamless background screening for UAE enterprises.</p>
							<a href="#enquirNow" class="bottom-link bottom-link-wt" data-bs-toggle="modal" data-bs-target="#enquirNow">Start Your<span> Verification Journey</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>
