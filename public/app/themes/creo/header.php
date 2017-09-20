<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- google fonts -->
    <link href='//fonts.googleapis.com/css?family=Gentium+Basic:400,700,400italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:700,400' rel='stylesheet' type='text/css'>
    <link href="//fonts.googleapis.com/css?family=Raleway:200,300" rel="stylesheet">
    <!-- /google fonts -->

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-20635588-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments)};
      gtag('js', new Date());

      gtag('config', 'UA-20635588-1');
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'brosco' ); ?></a>

    <?php
        if ( is_home() && !is_paged() ) {
            get_template_part('featured');
        }
    ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-inside">
            <div class="logo">
                <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo_light.svg" alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                </a>

                <!-- <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo_light.svg" alt="<?php bloginfo( 'name' ); ?>">

    			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
		    </div>

    		<nav id="site-navigation" class="main-navigation" role="navigation">
    			<button class="menu-toggle"><?php _e( 'Primary Menu', 'brosco' ); ?></button>
    			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    		</nav><!-- #site-navigation -->
        </div>
	</header><!-- #masthead -->



	<div id="content" class="site-content">
