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

	<?php do_action( 'pizzaro_before_footer_v1' ); ?>

	<footer id="colophon" class="site-footer footer-v1" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to pizzaro_footer action
			 *
			 * @hooked pizzaro_footer_widgets - 10
			 * @hooked pizzaro_credit         - 20
			 */
			do_action( 'pizzaro_footer_v1' ); ?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'pizzaro_after_footer_v1' ); ?>

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
	$(document).ready(function() {
    var n = '#menu-main_menu-1', no = 'nav-open';
    $('#menu-main_menu-1').click(function() {
        if ($(n).hasClass(no)) {
            $(n).animate({height:0},300);
            setTimeout(function() {
                $(n).removeClass(no).removeAttr('style');
            },320);
        }
        else {
            var newH = $(n).css('height','auto').height();
            $(n).height(0).animate({height:newH},300);
            setTimeout(function() {
                $(n).addClass(no).removeAttr('style');
            },320);
        }
    });
});
</script>
</body>
</html>