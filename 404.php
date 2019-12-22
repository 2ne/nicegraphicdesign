<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package nicegraphicdesign
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="wrapper">
				<div class="left-entry" style="min-height: 250px;">
					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found', 'nicegraphicdesign' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'nicegraphicdesign' ); ?></p>

						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
