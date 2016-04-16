<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hw21serhatyi
 */

get_header(); ?>
<div class="container">
    <div id="primary" class="content-area cat2-content-area">
        <main id="main" class="site-main" role="main">

            <?php
            $args = array('post_type' => 'post', 'posts_per_page' => 12, 'category_name' => 'category-2');
            $loop = new WP_Query($args);
            if ( $loop->have_posts() ) : ?>

                <header class="page-header">
                    <div class="banner-before">
                        <span><?php _e( 'Category 2 - Gallery', 'hw21serhatyi' ); ?></span>
                    </div>
                </header><!-- .page-header -->

                <?php

                /* Start the Loop */

                while ( $loop->have_posts() ) : $loop->the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'template-parts/content-category-2', get_post_format() );

                endwhile;

                ddementieva_paging_nav();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
