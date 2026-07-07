<?php
/**
 * The template for displaying all single pages
 *
 * @package MintSolutions_Theme
 */

get_header();

$page_slug = $post->post_name;

// Map 'contactus' slug to 'contact-us.php' if needed, or vice-versa
if ( $page_slug === 'contactus' ) {
    $page_slug = 'contact-us';
}

$page_file = get_template_directory() . '/pages/' . $page_slug . '.php';

if ( file_exists( $page_file ) ) {
    require $page_file;
} else {
    // Fallback if no custom page template exists in pages/
    ?>
    <main id="primary" class="site-main">
        <div class="container" style="padding-top: 150px; padding-bottom: 50px;">
            <?php
            while ( have_posts() ) :
                the_post();
                ?>
                <header class="entry-header" style="margin-bottom: 50px;">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; // End of the loop. ?>
        </div>
    </main>
    <?php
}

get_footer();
