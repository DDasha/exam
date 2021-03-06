<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hw21serhatyi
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header-cat2">
        <?php
        if ( is_single() ) {
            the_title( '<h1 class="entry-title">', '</h1>' );
        } else {
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        }

        if ( 'post' === get_post_type() ) : ?>


            <?php
        endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content-cat2">
        <?php
        if(is_single()) {
            the_content(sprintf(
            /* translators: %s: Name of current post. */
                wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'hw21serhatyi'), array('span' => array('class' => array()))),
                the_title('<span class="screen-reader-text">"', '"</span>', false)
            ));

            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'hw21serhatyi'),
                'after' => '</div>',
            ));
        } else { ?>
            <a href="<?php the_permalink(); ?>">
            <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } ?>
            </a>

        <?php the_excerpt();
        }
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">

    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
