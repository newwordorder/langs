<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

?>
<section id="newsletter" class="bg--primary space--lg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 text-center mb-4">
				<?php the_field('form_text_block','options'); ?>
			</div>
		</div>

		<!-- Begin Mailchimp Signup Form -->

<div id="mc_embed_signup">
<form action="https://penelopebell.us19.list-manage.com/subscribe/post?u=17b26e83b12e40eb25f5cc7af&amp;id=0f1b49872d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<div class="form-row">
	<div class="col-lg-3 col-md-6">
		<div class="mc-field-group">
			<label class="d-none" for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
			<input type="email" value="" name="EMAIL" class="form-control required email" id="mce-EMAIL">
		</div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="mc-field-group">
			<label class="d-none" for="mce-FNAME">First Name </label>
			<input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME">
		</div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="mc-field-group">
			<label class="d-none" for="mce-LNAME">Last Name </label>
			<input type="text" value="" name="LNAME" class="form-control" id="mce-LNAME">
		</div>
	</div>
	<div class="col-lg-3 col-md-6">

<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_17b26e83b12e40eb25f5cc7af_0f1b49872d" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn--solid btn-block button"></div>
		</div>
	</div>
</div>
</form>
</div>
<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

	</div>
</section>
<?php echo do_shortcode( '[instagram-feed]' ); ?>



<footer id="footer" class="footer bg--dark">
		<div class="container">

				<div class="row align-items-center">
						<div class="col-sm-4">
								<p>© Copyright Penelope Bell | <a href="<?php echo get_home_url(); ?>/privacy-policy">Privacy Policy</a></p>
						</div>
						<div class="col-sm-4 text-center">
							<a href="<?php echo get_home_url(); ?>" id="" class="footer__logo">
								<img class="footer__logo" src="<?php bloginfo('template_directory'); ?>/img/logo--white.svg" alt="Logo">
							</a>
						</div>
						<div class="col-sm-4">
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'footer-social',
									'container_class' => 'footer-nav footer-nav__social',
									'container_id'    => '',
									'menu_class'      => 'menu',
									'fallback_cb'     => '',
									'menu_id'         => 'footer__social',
									'walker'          => new understrap_WP_Bootstrap_Navwalker(),
								)
							); ?>
						</div>

				</div>

</footer>





<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/header.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/flickity.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fontawesome-all.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/typed.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/smooth-scroll.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ytplayer.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/instagram.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

<script>
	AOS.init();
</script>

<script type="text/javascript">
    var feed = new Instafeed({
        get: 'tagged',
        tagName: 'awesome',
        clientId: '51714b77e50441d0b9d7cd0e91bb8b7b'
    });
    feed.run();
</script>

</body>

</html>
