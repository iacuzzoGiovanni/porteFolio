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
    <body id="single">
        <header id="first">
            <hgroup>
                <h1 id="GioIac">
                    <a href="<?php bloginfo("url") ?>" title="aller à la page d'accueil">Giovanni<strong>Iacuzzo</strong></a>
                </h1>
                <h2>
                    <?php bloginfo("description") ?>
                </h2>
            </hgroup>
        </header>
		
		<?php 
			if(have_posts()):
				while(have_posts()):
					the_post();
		?>
			<article id="oneWork">
				<?php 
					the_post_thumbnail(); 
				?>
			</article>
		<?php
				endwhile;
			endif;
		?>
<?php

get_footer();