<?php
/*
Template Name: Blog Home
*/

get_header(); ?>

<div class="wrapper">
	<div class="left-entry">
		<?php echo do_shortcode( '[ajax_load_more pause="false" transition="fade" preloaded="true" preloaded_amount="4" seo="true" posts_per_page="4" post_type="post" category="blog" button_label="Loading Posts"]' ) ?>
	</div>
</div>

<?php get_footer(); ?>