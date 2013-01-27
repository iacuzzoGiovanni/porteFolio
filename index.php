<?php

get_header();

?>

	<div>
		<section id="home">
            <h1>
                <?php 
                    $page_id = 13;
                    $page_data = get_page($page_id);
                    echo($page_data->post_content); 
                ?>
            </h1>
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
                <h1>Contact</h1>
            </header>
            <article>
                <div id="country">
                    <a href="https://maps.google.be/maps?q=li%C3%A8ge&hl=fr&ie=UTF8&sll=50.154465,4.624975&sspn=2.305244,5.817261&hnear=Li%C3%A8ge,+R%C3%A9gion+wallonne&t=m&z=12" title="aller voir liège sur la google map">aller vers la map google</a>
                </div>
                <div id="coord">
                    <h3>Où je vis</h3>
                    <p>Non loin du coeur de la cité ardente</p>
                    <h3>Comment me joindre&nbsp;?</h3>
                    <p>Tel&nbsp;: <a href="tel:+32499385833" title="téléphoner à Giovanni">+32 (0) 499 38 58 33</a></p>
                    <p>E-mail : <a href="mailto:iacuzzogiovanni@gmail.com" title="envoyer un mail à iacuzzogiovanni@gmail.com">iacuzzogiovanni@gmail.com</a></p>
                    <h3>Ou bien, joignez-moi via ce formulaire</h3>
                    <?php 
                        $erreurNom = $_SESSION['emptyNom']; 
                        $erreurEmail = $_SESSION['errorMail'];
                        $erreurMessage = $_SESSION['emptyTexte'];
                        session_destroy();
                    ?>
                    <form id="contactForm" action="<?php bloginfo('template_directory'); ?>/contact-form.php" method="post">
                        <fieldset>
                            <div>
                                <label for="nom" class="icon-user"><span>user name</span></label>
                                <input type="text" name="nom" id="nom" placeholder="mon nom" />
                            </div>
                            <?php if(isset($erreurNom)): ?>
                                <p class="errors"><?php echo($erreurNom);?></p>
                            <?php endif; ?>
                            <div>
                                <label for="email" class="icon-email"><span>user e-mail</span></label>
                                <input type="email" name="email" id="email" placeholder="mon e-mail" />
                            </div>
                            <?php if(isset($erreurEmail)): ?>
                                <p class="errors"><?php echo($erreurEmail);?></p>
                            <?php endif; ?>
                            <div>
                                <label for="texte" class="icon-pencil"><span>user message</span></label>
                                <textarea name="texte" id="texte" rows="10" placeholder="mon message"></textarea>
                            </div>
                            <?php if(isset($erreurMessage)): ?>
                            <div>
                                <p class="errors"><?php echo($erreurMessage);?></p>
                            </div>
                            <?php endif; ?>
                            <div>
                                <button type="submit"><span class="icon-paper-plane"></span>envoyer</button>
                            <div>
                        </fieldset>
                    </form>
                </div>
            </article>
            <footer>
                <a href="#html" title="aller vers le haut du site">vers le haut</a>
            </footer>
		</section>
	</div>

<?php

get_footer();