<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hw21serhatyi
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

	<aside id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		<?php if ( get_theme_mod( 'ddementieva_banner' ) ) : ?>
			<div class='sidebar-banner'>
				<img src='<?php echo esc_url( get_theme_mod( 'ddementieva_banner' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
			</div>
		<?php endif; ?>
	</aside><!-- #secondary -->
</div><!-- /container -->
