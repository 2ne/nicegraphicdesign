<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package nicegraphicdesign
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrapper">
			<div class="site-info">
				<div><img alt="Logo" style="width: 125px;" src="<?php echo get_stylesheet_directory_uri(); ?>/logo.png"/></div>
				<div style="margin: 12px 0;">6 The Bridle Path, Totnes </br>Devon TQ9 5HD</div>
				<div class="contact-details">
					<div><a class="black no-underline" href="tel:+447712321907">+44 (0) 7712 321 907</a></div>
					<div><a class="black" href="mailto:simon@nicegraphicdesign.co.uk">simon@nicegraphicdesign.co.uk</a></div>
				</div>
				<div class="signup">
					<h4>Sign up for Nice News</h4>
					<?php echo do_shortcode("[emailpickup hide_label='yes' button_text='Submit >' placeholder='Email Address']"); ?>
				</div>
			</div><!-- .site-info -->
			<div class="home-text-bottom"><?php the_field('bottom_text', 25); ?></div>
		</div>
	</footer><!-- #colophon -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-scrolltofixed-min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.transport.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-41133031-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-41133031-1');
</script>

	
	<script>
		$(document).ready(function() {
			$(".nav-container").scrollToFixed({
        		preFixed: function() { $("body").addClass("sticky-nav"); },
        		postFixed: function() { $("body").removeClass("sticky-nav"); },
    		});
			
			if ($("article").hasClass("category-work")) {
				$("body").addClass("category-work");
			}
			if ($("article").hasClass("category-blog")) {
				$("body").addClass("category-blog");
			}
			$('[data-transport]').transport({
    			tablet: '(max-width: 840px)'
			});
			
			/*
		    $('.details-wrapper p').each(function() {
			    var homeContent = $(this).text();

			    homeContent = homeContent.replace(/\//g, "<span style='color: #fff;'>/</span>");
			    $(this).html(homeContent);
		    });
			
			$('.right-entry p').each(function() {
				var text = $(this).text();

				text = text.replace(/\//g, "<span style='color: #00ff18;'>/</span>");
				text = text.replace(/“/g, "<span style='color: #00ff18;'>“</span>");
				text = text.replace(/”/g, "<span style='color: #00ff18;'>”</span>");

				$(this).html(text);
			});
			
			$('.right-side-about p').each(function() {
				var text = $(this).text();

				text = text.replace(/“/g, "<span style='color: #00ff18;'>“</span>");
				text = text.replace(/”/g, "<span style='color: #00ff18;'>”</span>");

				$(this).html(text);
			});
			*/
		});
	</script>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>