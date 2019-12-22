<?php
/**
 * @package nicegraphicdesign
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div class="left-entry">
			<div data-transport="tablet!#mobileImageSpace">
				<?php $main_image = get_field('main_image');
				if( !empty($main_image) ): ?>
					<img class="main-work-image"  src="<?php echo $main_image['url']; ?>" alt="<?php echo $main_image['alt']; ?>" />
				<?php endif; ?>

				<div class="work-images-wrapper">
					<?php $work_image_1 = get_field('work_image_1'); if( !empty($work_image_1) ): ?>
						<img src="<?php echo $work_image_1['url']; ?>" alt="<?php echo $work_image_1['alt']; ?>" />
					<?php endif; ?>
					<?php if( get_field('work_image_1_label') ): ?>
						<div class="work-label-row">
							<?php the_field('work_image_1_label'); ?>
						</div>
					<?php endif; ?>
					<?php $work_image_2 = get_field('work_image_2'); if( !empty($work_image_2) ): ?>
						<img src="<?php echo $work_image_2['url']; ?>" alt="<?php echo $work_image_2['alt']; ?>" />
					<?php endif; ?>
					<?php if( get_field('work_image_2_label') ): ?>
						<div class="work-label-row">
							<?php the_field('work_image_2_label'); ?>
						</div>
					<?php endif; ?>
					<?php $work_image_3 = get_field('work_image_3'); if( !empty($work_image_3) ): ?>
						<img src="<?php echo $work_image_3['url']; ?>" alt="<?php echo $work_image_3['alt']; ?>" />
					<?php endif; ?>
					<?php if( get_field('work_image_3_label') ): ?>
						<div class="work-label-row">
							<?php the_field('work_image_3_label'); ?>
						</div>
					<?php endif; ?>
					<?php $work_image_4 = get_field('work_image_4'); if( !empty($work_image_4) ): ?>
						<img src="<?php echo $work_image_4['url']; ?>" alt="<?php echo $work_image_4['alt']; ?>" />
					<?php endif; ?>
					<?php if( get_field('work_image_4_label') ): ?>
						<div class="work-label-row">
							<?php the_field('work_image_4_label'); ?>
						</div>
					<?php endif; ?>
					<?php $work_image_5 = get_field('work_image_5'); if( !empty($work_image_5) ): ?>
						<img src="<?php echo $work_image_5['url']; ?>" alt="<?php echo $work_image_5['alt']; ?>" />
					<?php endif; ?>
					<?php if( get_field('work_image_5_label') ): ?>
						<div class="work-label-row">
							<?php the_field('work_image_5_label'); ?>
						</div>
					<?php endif; ?>
					<?php $work_image_6 = get_field('work_image_6'); if( !empty($work_image_6) ): ?>
						<img src="<?php echo $work_image_6['url']; ?>" alt="<?php echo $work_image_6['alt']; ?>" />
					<?php endif; ?>
					<?php if( get_field('work_image_6_label') ): ?>
						<div class="work-label-row">
							<?php the_field('work_image_6_label'); ?>
						</div>
					<?php endif; ?>
					<?php $work_image_7 = get_field('work_image_7'); if( !empty($work_image_7) ): ?>
						<img src="<?php echo $work_image_7['url']; ?>" alt="<?php echo $work_image_7['alt']; ?>" />
					<?php endif; ?>
					<?php if( get_field('work_image_7_label') ): ?>
						<div class="work-label-row">
							<?php the_field('work_image_7_label'); ?>
						</div>
					<?php endif; ?>
					<?php $work_image_8 = get_field('work_image_8'); if( !empty($work_image_8) ): ?>
						<img src="<?php echo $work_image_8['url']; ?>" alt="<?php echo $work_image_8['alt']; ?>" />
					<?php endif; ?>
					<?php if( get_field('work_image_8_label') ): ?>
						<div class="work-label-row">
							<?php the_field('work_image_8_label'); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="right-entry">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
			<div class="spacer">-</div>
			<p class="description-post"><?php the_field('description'); ?></p>
			<div id="mobileImageSpace">

			</div>
			<p><?php the_content(); ?></p>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->


	<div class="posts-wrapper">
		<?php
				$query = 'category_name=work&posts_per_page=-1';
				$queryObject = new WP_Query($query);
				// The Loop...
				if ($queryObject->have_posts()) {
				    while ($queryObject->have_posts()) {
				        $queryObject->the_post();
								$thumbnail_1 = get_field('thumbnail_1');
								$description = get_field('description');

 								echo '<div class="home-post"> <a href="' . get_permalink() . '"> <span class="images-wrapper"> <img src=" ' . $thumbnail_1['url'] . '" /> </span> <div class="details-wrapper"> <h3 class="company-title">' . get_the_title() . ' </h3> <span class="spacer">-</span>	<p> '  . $description .  ' </p> </div> </a> </div> ';

				    }
				}
		?>
</div>

<style>
.category-work article {
    border-bottom: 1px solid rgba(0, 239, 45, 1);
    padding-bottom: 30px;
    margin-bottom: 40px !important;
}
</style>
