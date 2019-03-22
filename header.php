<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php bloginfo('template_directory'); ?>/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre|Montserrat:300,500,700" rel="stylesheet">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>



    <!-- ******************* The Navbar Area ******************* -->
    <div id="header" class="header">

        <a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>

        <div class="header__inner container">
            <div class="d-flex align-items-center w-100 row">
                <div class="col-md-3">
                    <a href="<?php echo get_home_url(); ?>" id="site-logo" class="header__logo">

                        <img class="logo logo--white" src="<?php bloginfo('template_directory'); ?>/img/logo--white.svg" alt="Langs Building Supplies">
                        <img class="logo logo--black" src="<?php bloginfo('template_directory'); ?>/img/logo--black.svg" alt="Langs Building Supplies">

                    </a>
                </div>
                <a id="toggleMenu" class="toggle-menu">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </a>

                <div class="col">
                    <?php wp_nav_menu(
						array(
							'theme_location'  => 'header',
							'container_class' => 'header-nav header-nav__right',
							'container_id'    => '',
							'menu_class'      => 'menu',
							'fallback_cb'     => '',
							'menu_id'         => 'header__right',
							'walker'          => new understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
                </div>

            </div>
        </div><!-- .container -->

    </div><!-- #header -->
    <?php wp_nav_menu(
		array(
			'theme_location'  => 'mobile',
			'container_class' => 'header-nav header-nav__mobile',
			'container_id'    => 'mobileNav',
			'menu_class'      => 'menu',
			'fallback_cb'     => '',
			'menu_id'         => 'header__mobile',
			'walker'          => new understrap_WP_Bootstrap_Navwalker(),
		)
	); ?>






    <div class="page"> 