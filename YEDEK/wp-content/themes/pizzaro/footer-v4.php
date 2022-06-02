<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package pizzaro
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'pizzaro_before_footer_v4' ); ?>

	<div class="site-footer footer-v4" role="contentinfo">
		<div class="footer-social-icons">
				<span class="social-icon-text">Bizi takip edin</span>
					
		</div>
		<ul class="social-icons list-unstyled">
						<li><a class="fa fa-facebook" href="https://www.facebook.com/italianafabbrica/?ref=br_rs"></a></li>
						<li><a class="fa fa-twitter" href="https://twitter.com/fabbricaTR"></a></li>
						<li><a class="fa fa-instagram" href="https://www.instagram.com/italianafabbrica/"></a></li>	
					</ul>
		
	</div><!-- #colophon -->

	<?php do_action( 'pizzaro_after_footer_v4' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>
<script>
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

</script>
<script>

$(document).ready(function () {
  $(".menu-item").click(function(event) {
      $( "#site-navigation" ).removeClass( "toggled" );
  });
});

</script>

</body>
</html>