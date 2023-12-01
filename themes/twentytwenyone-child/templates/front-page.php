<?php 
/**
 * Template Name: Front Page
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

if( is_front_page() || is_page('contact') ){
    $post_args = array(
        'post_type' => array('post'),
        'post_status' => 'publish',
        'posts_per_page' => 3
    );

    $post_query = new WP_Query( $post_args );

    if( $post_query->have_posts() ) {
        while ( $post_query->have_posts() ) {
            $post_query->the_post();
            ?>
            <div class="custom-post">

                <div  class="post-content" style="text-align: center;">
                    <h2 class="post-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>

                    <div class="post-excerpt" style="max-width:900px; width:100%; margin:0 auto;">
                        <?php the_excerpt(); ?>
                    </div>

                    <?php if ( has_post_thumbnail() ) : ?>
                    <div class="featured-image" style="max-width:900px; width:100%; margin:0 auto;">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>
                <?php endif; ?>

                </div>
            </div>
            <?php
        }
        wp_reset_postdata();
    }
}
get_footer();