<?php
/**
 * @package nicegraphicdesign
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				
		<div class="sharing">
			<?php if (function_exists('synved_social_share_markup')) echo synved_social_share_markup(); ?>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<p><?php the_content(); ?></p>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
