<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?>>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="keywords" content="noticias, reportajes, Tlaxcala, estado, municipios, cultura, política, videos, audios">
    <meta name="description" content="VersusTlx. Noticias y reportajes con lo más destacado de la información.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="NOODP">
    <meta name="robots" content="NOYDIR">
	<meta property="fb:pages" content="855519107832567" />
	<meta property=”article:author” content=”https://www.facebook.com/VSviridianaSalazar/”/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div id="site-topbar-container">
        <div id="bar-tdsn-container">
            <div id="timedate-content">
                <span id="site-date"></span>
                <span id="site-hour"></span>
            </div>
            <div class="socialnetwork-content">
            <a class="fb" href="https://www.facebook.com/versustlx/?fref=nf" target="_blank"><span class="fa fa-facebook-official" aria-hidden="true"></span></a>
            <a class="tw" href="https://twitter.com/versustlx" target="_blank"><span class="fa fa-twitter" aria-hidden="true"></span></a>
            <a class="yt" href="https://www.youtube.com/channel/UCoc2dJY1Q5Eac959eW-nl1A" target="_blank"><span class="fa fa-youtube-play" aria-hidden="true"></span></a>
            <a class="sc" href="https://m.soundcloud.com/versus-tlx" target="_blank"><span class="fa fa-soundcloud" aria-hidden="true"></span></a>
            <a class="ins" href="https://www.instagram.com/versustlx/" target="_blank"><span class="fa fa-instagram" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>
    <div id="header-container" class="clearfix">
        <div class="header-content">
          <div id="header-standard">
            <div id="logo-standard"><a href="https://www.versustlx.com.mx"><img src="<?php bloginfo('template_url')?>/img/versus_logo_slogan2.png" alt="versustlx"></a></div>
          </div>
          <div id="header-mobile">
            <div id="logo-mobile"><a href="https://www.versustlx.com.mx"><img src="<?php bloginfo('template_url')?>/img/versus_logo_mobile.png" alt="versustlx"></a></div>
            <div id="btn-open">
              <span class="fa fa-bars" aria-hidden="true"></span>
              <span hidden>Menu</span>
            </div>
          </div>
        </div>
        <?php dynamic_sidebar( 'banner-1' ); ?>
        <div id="btn-open-2">
          <span class="fa fa-bars" aria-hidden="true"></span>
          <span hidden>Menu</span>
      </div>
    </div>
    <nav class="site-navigation primary-navigation">
        <div id="menu-container" class="clearfix">
            <div class="menu">
            <?php wp_nav_menu ( array(
                'container' => false,
                'items_wrap' => '<ul>%3$s</ul>',
                'theme_location' => 'primary'
            )); ?>
            </div>
            <div id="search-container">
                <div class="search-content">
                    <button onclick="toggleSearch()" class="search-btn"><span class="fa fa-search" aria-hidden="true"></span></button>
                    <div id="container-search-form" class="dropdown-content"><?php get_search_form(); ?></div>
                </div>
            </div>
        </div>
    </nav>
    <script>
    function toggleSearch() {
        document.getElementById("container-search-form").classList.toggle("show");
    }
    </script>
</header>
    <div id="mobile-nav">
        <div id="btn-close-container">
            <div id="btn-close"><span class="fa fa-times" aria-hidden="true"></span></div>
        </div>
        <div class="socialnetwork-content">
            <a class="fb" href="https://www.facebook.com/versustlx/?fref=nf" target="_blank"><span class="fa fa-facebook-official" aria-hidden="true"></span></a>
            <a class="tw" href="https://twitter.com/versustlx" target="_blank"><span class="fa fa-twitter" aria-hidden="true"></span></a>
            <a class="yt" href="https://www.youtube.com/channel/UCoc2dJY1Q5Eac959eW-nl1A" target="_blank"><span class="fa fa-youtube-play" aria-hidden="true"></span></a>
            <a class="sc" href="https://m.soundcloud.com/versus-tlx" target="_blank"><span class="fa fa-soundcloud" aria-hidden="true"></span></a>
            <a class="ins" href="https://www.instagram.com/versustlx/" target="_blank"><span class="fa fa-instagram" aria-hidden="true"></span></a>
        </div>
        <div id="search-form-container"><?php get_search_form(); ?></div>
        <div class="menu-content">
            <?php wp_nav_menu ( array(
                'container' => false,
                'items_wrap' => '<ul>%3$s</ul>',
                'theme_location' => 'primary'
            )); ?>
        </div>
    </div>
