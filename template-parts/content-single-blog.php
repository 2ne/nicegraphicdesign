<?php
/**
 * @package nicegraphicdesign
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="left-entry">
		<header class="entry-header">
			<a class="back-link" href="http://nicegraphicdesign.co.uk/blog/">Back to Blog</a>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<p><?php the_field('byline'); ?></p>
			<div class="sharing top">
				<?php if (function_exists('synved_social_share_markup')) echo synved_social_share_markup(); ?>
				<span class="custom-pin">
					<a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" data-pin-shape="round" data-pin-height="32"><img src="http://nicegraphicdesign.co.uk/wp-content/themes/nicegraphicdesign/pinterest.png" /></a>
				</span>
			</div>
			<p><?php the_content(); ?></p>
			<?php $large_image = get_field('large_image');
			if( !empty($large_image) ): ?>
				<p><img  src="<?php echo $large_image['url']; ?>"/></p>
			<?php endif; ?>
			<p><?php the_field('additional_information'); ?></p>
			<div class="sharing">
				<?php if (function_exists('synved_social_share_markup')) echo synved_social_share_markup(); ?>
				<span class="custom-pin">
					<a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" data-pin-shape="round" data-pin-height="32"><img src="http://nicegraphicdesign.co.uk/wp-content/themes/nicegraphicdesign/pinterest.png" /></a>
					<!-- Please call pinit.js only once per page -->
					<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
				</span>
			</div>
		</div><!-- .entry-content -->	
	</div>
</article><!-- #post-## -->
