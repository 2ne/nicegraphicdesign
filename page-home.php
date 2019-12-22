<?php
/*
Template Name: Home
*/

get_header(); ?>

<div class="wrapper">
	<div class="posts-wrapper">
		<?php query_posts('category_name=work&posts_per_page=-1'); while (have_posts()) : the_post(); ?>

		<?php $value = get_field('thumbnail_2');
			if( $value ) {
				echo '<div class="home-post two-images">';
			} else {
				echo '<div class="home-post one-image">';
			}
		?>
			<a href="<?php the_permalink(); ?>">
				<span class="images-wrapper">
					<?php $thumbnail_1 = get_field('thumbnail_1');
					if( !empty($thumbnail_1) ): ?>
						<img src="<?php echo $thumbnail_1['url']; ?>" alt="<?php echo $thumbnail_1['alt']; ?>" />
					<?php endif; ?>

					<?php $thumbnail_2 = get_field('thumbnail_2');
					if( !empty($thumbnail_2) ): ?>
						<img src="<?php echo $thumbnail_2['url']; ?>" alt="<?php echo $thumbnail_2['alt']; ?>" />
					<?php endif; ?>
				</span>
				<div class="details-wrapper">
					<h3 class="company-title"><?php the_title(); ?></h3>
					<span class="spacer">-</span>
					<p><?php the_field('description'); ?></p>
				</div>
			</a>
		</div>
		<?php endwhile; ?>
	</div>
</div>

<?php get_footer(); ?>
