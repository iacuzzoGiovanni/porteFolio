<?php session_start(); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="utf-8" />
        <meta name="description" content="Portfolio de Iacuzzo Giovanni" />
        <meta name="keywords" content="porte, folio, porte-folio, portfolio, Giovanni, Iacuzzo, Giovanni iacuzzo, designer, web, internet, web-designer, webdesigner, mobile, web developpeur, webdeveloppeur, web developer, developer, developpeur, mobile design, web mobile, web design" />
        <meta name="author" content="Iacuzzo Giovanni" />
        <meta name="viewport" content="width=device-width" />
        <title><?php bloginfo("name") ?></title>
        <link rel="stylesheet" href="<?php bloginfo("url") ?>/wp-content/themes/porteFolio/normalize.css" />
        <link rel="stylesheet" href="<?php bloginfo("stylesheet_url") ?>" />
        <script src="<?php bloginfo('template_directory'); ?>/js/modernizr-2.6.2.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <header id="first">
            <hgroup>
                <h1 id="GioIac">
                    <a href="<?php bloginfo("url") ?>" title="aller à la page d'accueil">Giovanni<strong>Iacuzzo</strong></a>
                </h1>
                <h2>
                    <?php bloginfo("description") ?>
                </h2>
            </hgroup>
            <nav>
                <h1 id="menuNavigationNone">navigation menu</h1>
                <?php $defaults = array(
                    'theme_location'  => 'header-menu',
                    'menu'            => '', 
                    'container'       => false, 
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => ''
                ); ?>
                <?php wp_nav_menu($defaults) ?>
            </nav>
        </header>