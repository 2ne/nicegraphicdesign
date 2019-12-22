<?php
/**
 * The template for displaying all single posts.
 *
 * @package nicegraphicdesign
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="wrapper">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php if(in_category('3')) {
						get_template_part( 'template-parts/content', 'single-work' );
					}
					elseif(in_category('4')) {
						get_template_part( 'template-parts/content', 'single-blog' );
					}
					else {
						get_template_part( 'template-parts/content', 'single' );
					} ?>

				<?php endwhile; // end of the loop. ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
