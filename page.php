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
	<section id="blog">
        <header>
            <h3>Vous êtes sur mon blog, enjoy!</h3>
        </header>
		<?php 
        	$query = new WP_Query( 'category_name=blog' );
        	while($query->have_posts()):
        		$query->the_post();
        ?>
        	<article class="blog">
    			<div class="avatar">
                    <?php 
                        $email = get_the_author_meta('user_email');
                        $alt = 'photo de Iacuzzo Giovanni';
                        echo get_avatar($email, $size,  $defaults, $alt);
                    ?>
                </div>
                <div class="jour">
                    <time><?php echo get_the_date('j'); ?></time>
                    <time><?php echo substr(get_the_date('F'), 0, 3); ?></time>
                </div>
                <div class="message">
                    <h1>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h1>
                    <p class="postedAt">posté à <strong><?php the_time('G:i'); ?></strong> par <strong><?php echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name'); ?></strong> en <strong><?php echo get_the_date('Y'); ?></strong></p>
                   
                    <?php the_content(); ?>
                </div>
        	</article>
        <?php
        	endwhile;
        ?>
	</section>

<?php

get_footer();