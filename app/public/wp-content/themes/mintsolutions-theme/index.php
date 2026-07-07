<?php
/**
 * Main template file.
 *
 * @package MintSolutions_Theme
 */

// Custom fallback routing for pages that might not exist in the WP database yet
// but have a matching PHP partial in the pages/ directory.
global $wp;
$request = trim($wp->request, '/');

// Map 'contactus' to 'about-us' since the contact form was placed there
if ( $request === 'contactus' ) {
    $request = 'about-us';
}

$page_file = get_template_directory() . '/pages/' . $request . '.php';

if ( ! empty( $request ) && file_exists( $page_file ) ) {
    // If it's a 404 in WordPress but we have a file, force a 200 OK
    global $wp_query;
    $wp_query->is_404 = false;
    status_header( 200 );
    
    get_header();
    require $page_file;
    get_footer();
    exit; // Stop execution of the rest of index.php
}

get_header();
?>
<main id="primary" class="site-main">
	<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header>

				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<div class="container" style="padding: 100px 0; text-align: center;">
			<h1>404 - Page Not Found</h1>
			<p><?php esc_html_e( 'No content found.', 'mintsolutions' ); ?></p>
		</div>
	<?php endif; ?>
</main>
<?php
get_footer();
