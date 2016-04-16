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
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>

			<div class="post-date">
				<p class="post-day"><?php	the_time('j'); ?></p>
				<p class="post-month"><?php	the_time('F'); ?></p>
			</div>
		<?php
		endif; ?>
		<?php ddementieva_entry_footer(); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if(is_single()) {
			the_content(sprintf(
			/* translators: %s: Name of current post. */
				wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'exam'), array('span' => array('class' => array()))),
				the_title('<span class="screen-reader-text">"', '"</span>', false)
			));

			wp_link_pages(array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'exam'),
				'after' => '</div>',
			));
		} else {
			the_excerpt();?>
			<a href="<?php the_permalink(); ?>" class="continue">Continue Reading</a>
		<?php }
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
