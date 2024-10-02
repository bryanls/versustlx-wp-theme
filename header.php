<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?>>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="keywords" content="noticias, reportajes, Tlaxcala, estado, municipios, cultura, política, videos, audios">
    <meta name="description" content="VersusTlx. Noticias y reportajes con lo más destacado de la información.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="NOODP">
    <meta name="robots" content="NOYDIR">
	<meta property="fb:pages" content="855519107832567" />
	<meta property="article:author" content="https://www.facebook.com/VSviridianaSalazar/"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>
<body>
    <div id="mobile-nav">
        <div id="close-menu">
            <span class="inav fa fa-times" aria-hidden="true"></span>
            <span class="sr-only">Cerrar menu</span>
        </div>
        <div class="menu-content">
            <?php wp_nav_menu ( array(
                'container' => false,
                'items_wrap' => '<ul class="menu-wrap">%3$s</ul>',
                'theme_location' => 'primary'
            )); ?>
            <div class="socialmedia-content">
                <a class="fb" href="https://www.facebook.com/versustlx/?fref=nf" target="_blank"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                <a class="tw" href="https://twitter.com/versustlx" target="_blank"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                <a class="yt" href="https://www.youtube.com/channel/UCoc2dJY1Q5Eac959eW-nl1A" target="_blank"><span class="fa fa-youtube-play" aria-hidden="true"></span></a>
                <a class="sc" href="https://m.soundcloud.com/versus-tlx" target="_blank"><span class="fa fa-soundcloud" aria-hidden="true"></span></a>
                <a class="ig" href="https://www.instagram.com/versustlx/" target="_blank"><span class="fa fa-instagram" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>
    <div id="search-mobile-container">
        <div id="close-search">
            <span class="inav fa fa-times" aria-hidden="true"></span>
            <span class="sr-only">Cerrar menu</span>
        </div>
        <?php get_search_form(); ?>
    </div>
    <div id="main-wrapper">
        <header>
            <div id="topbar-container">
                <div id="topbar-content">
                    <div class="timestamp-wrap">
                        <span id="clock"></span>
                    </div>
                    <div class="socialmedia-wrap">
                        <a class="fb" href="https://www.facebook.com/versustlx/" target="_blank"><span class="fa fa-facebook-official" aria-hidden="true"></span></a>
                        <a class="tw" href="https://twitter.com/versustlx" target="_blank"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                        <a class="yt" href="https://www.youtube.com/channel/UCoc2dJY1Q5Eac959eW-nl1A" target="_blank"><span class="fa fa-youtube-play" aria-hidden="true"></span></a>
                        <a class="sc" href="https://m.soundcloud.com/versus-tlx" target="_blank"><span class="fa fa-soundcloud" aria-hidden="true"></span></a>
                        <a class="ig" href="https://www.instagram.com/versustlx/" target="_blank"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                    </div>
                </div>
            </div>
            <div id="header-container">
                <div id="header-content" class="clearfix">
                    <div id="brand-logo"><a href="https://www.versustlx.com.mx"><img src="<?php bloginfo('template_url')?>/img/versus_logo_mobile.png" alt="versustlx"></a></div>
                    <div class="banner-wrap-custom"><?php dynamic_sidebar( 'banner-1' ); ?></div>
                    <div id="open-search">
                        <span class="isearch fa fa-search" aria-hidden="true"></span>
                        <span class="sr-only">Abrir búsqueda</span>
                    </div>
                    <div id="open-menu">
                        <span class="inav fa fa-bars" aria-hidden="true"></span>
                        <span class="sr-only">Abrir menu</span>
                    </div>
                </div>
            </div>
            <nav id="navbar" class="site-navigation primary-navigation">
                <div id="menu-container" class="clearfix">
                    <div class="menu">
                    <?php wp_nav_menu ( array(
                        'container' => false,
                        'items_wrap' => '<ul>%3$s</ul>',
                        'theme_location' => 'primary'
                    )); ?>
                    </div>
                    <div id="search-form-wrapper">
                        <!-- <div class="search-form-content"> -->
                            <button class="search-btn"><span class="fa fa-search" aria-hidden="true"></span></button>
                            <div id="search-form-content" class="search-toggle"><?php get_search_form(); ?></div>
                        <!-- </div> -->
                    </div>
                </div>
            </nav>
        </header>
