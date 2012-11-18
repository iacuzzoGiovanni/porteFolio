<?php

get_header();

?>

	<section>
		<section id="home">
			<?php 
				$page_id = 13;
				$page_data = get_page($page_id);
				echo($page_data->post_content); 
			?>
		</section>
		<section id="about">
			<header>
                <h1>
                	<?php 
						$page_id = 15;
						$page_data = get_page($page_id);
						echo($page_data->post_title); 
					?>
				</h1>
            </header>
            <article>
                <h2>Mes compétences</h2>
                <ul>
                    <?php 
                    	$mesCustoms = new WP_Query(array('post_type' => 'competences', 'posts_per_page' => -1));
                    	while($mesCustoms->have_posts()):
                    		$mesCustoms->the_post();
                    		echo('<li>');
                    			echo('<p>');
                    				the_title();
                    			echo('</p>');
                    			$post_id = get_the_ID();
                    			echo('<div class="graph"><span class="'. get_post_meta($post_id, 'niveau', true) .'">&nbsp;</span></div>');
                    		echo('</li>');
                    	endwhile;
                    ?>
                </ul>
            </article>
            <article>
            	<h2>En quelques mots</h2>
            	<p>
			        <?php 
						$page_id = 15;
						$page_data = get_page($page_id);
						echo($page_data->post_content); 
					?>
            	</p>
            </article>
		    <footer>
                <a href="#html" title="aller vers le haut du site">vers le haut</a>
            </footer>
		</section>
		<section id="work">
                <header>
                    <h1>Mes réalisations</h1>
                </header>
                <article>
                    <?php
                    $mesCustoms2 = new WP_Query(array('post_type' => 'travaux', 'posts_per_page' => -1));
                    while($mesCustoms2->have_posts()):
                    	$mesCustoms2->the_post();
	                    echo('<div class="imgWork">');
	                        the_post_thumbnail(array(250,200));
	                        echo('<div class="infoMask">');
		                        echo('<h3>');
		                        	the_title();
		                        echo('</h3>');
		                        the_content();
		                        echo('<a href="');
		                        	the_permalink();
		                        echo('">Voir en grand</a>');
		                    echo('</div>');
	                    echo('</div>');
                    endwhile;
                    ?>
                </article>
                <footer>
                    <a href="#html" title="move to the top">go to the top page</a>
                </footer>
            </section>
		<section id="contact">
			<header>
                <h1>
                	<?php 
						$page_id = 17;
						$page_data = get_page($page_id);
						echo($page_data->post_title); 
					?>
				</h1>
            </header>
            <?php 
                $query = new WP_Query( 'page_id=17' );
                while($query->have_posts()):
                    $query->the_post();
            ?>
                <?php the_content(); ?>
            <?php
                endwhile;
            ?>
            <footer>
                <a href="#html" title="aller vers le haut du site">vers le haut</a>
            </footer>
		</section>
	</section>

<?php

get_footer();