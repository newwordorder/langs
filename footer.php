<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

?>




<footer id="footer" class="footer bg--dark">
		<div class="container">

				<div class="row align-items-center">
						<div class="col-sm-4">
								<p>© Copyright Langs Building Supplies | <a href="<?php echo get_home_url(); ?>/privacy-policy">Privacy Policy</a></p>
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
