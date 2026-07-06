<?php
/**
 * Theme header.
 *
 * @package MintSolutions_Theme
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- global Bootstrap toast container -->
	<div id="globalToastContainer" class="position-fixed top-0 end-0 p-3" style="z-index:30000; pointer-events:none;">
		<div id="globalToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="4000">
			<div class="toast-header">
				<strong id="globalToastTitle" class="me-auto">Title</strong>
				<button type="button" class="btn-close ms-2 mb-1" data-bs-dismiss="toast" aria-label="Close"></button>
			</div>
			<div class="toast-body" id="globalToastBody">Message</div>
		</div>
	</div>

	<header class="header">
		<div class="container">
			<div class="header-section">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo w-logo">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-v2.png" alt="Mint Solutions FZCO" />
				</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo b-logo">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-black-v2.png" alt="Mint Solutions FZCO" />
				</a>

				<div class="main-nav-otr">
					<nav class="main-nav">
						<ul class="nav-links">
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="<?php echo is_front_page() ? 'active' : ''; ?>">Home</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="<?php echo is_page( 'about-us' ) ? 'active' : ''; ?>">About us</a>
							</li>
							<li class="has-dropdown">
								<a href="<?php echo esc_url( home_url( '/our-expertise/' ) ); ?>" class="<?php echo is_page( array( 'our-expertise', 'services', 'solutions' ) ) ? 'active' : ''; ?>">OUR EXPERTISE</a>
								<ul class="dropdown">
									<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li>
									<li><a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>">Solutions</a></li>
								</ul>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>" class="<?php echo is_page( 'careers' ) ? 'active' : ''; ?>">Careers</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/contactus/' ) ); ?>" class="<?php echo is_page( 'contactus' ) ? 'active' : ''; ?>">Contact Us</a>
							</li>
						</ul>

						<div class="nav-rt-section">
							<ul>
								<li>
									<a title="Mint Solutions FZCO" href="<?php echo esc_url( home_url( '/salesforce/' ) ); ?>" class="sals-f-btn">Salesforce</a>
								</li>
								<li>
									<a title="Mint Solutions FZCO" href="#" class="rto-btn" data-bs-toggle="modal" data-bs-target="#enquirNow">
										<span>Request a free Demo</span>
									</a>
								</li>
							</ul>
						</div>
					</nav>

					<div class="mob-btn" role="button" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</div>

					<div class="overlay"></div>
				</div>
			</div>
		</div>
	</header>
