<!doctype html>
<html id="html">
    <head>
        <meta charset="<?php bloginfo('charset'); ?> " />
        <meta name="description" content="Porte folio de Iacuzzo Giovanni" />
        <meta name="keywords" content="porte, folio, porte-folio, Giovanni, Iacuzzo, Giovanni iacuzzo" />
        <meta name="author" content="Iacuzzo Giovanni" />
        <title><?php bloginfo("name") ?></title>
        <link rel="stylesheet" href="./normalize.css">
        <link rel="stylesheet" href="<?php bloginfo("stylesheet_url") ?>">
        <?php wp_head(); ?>
    </head>
    <body id="home">
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