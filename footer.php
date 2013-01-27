        <footer>
            <div>
                <section id="newsLetter">
                    <h2>Abonnez-vous à ma newsletter</h2>
                    <form id="newsLetterForm" action="<?php bloginfo('template_directory'); ?>/mailchimp/mcapi_listSubscribe.php" method="post">
                        <fieldset>
                            <input type="email" name="e-mail" id="e-mail" placeholder="entrez votre e-mail" /><!--
                            --><button type="submit">s'abonner</button>
                        </fieldset>
                        <?php if(isset($_SESSION['errors'])): ?>
                            <fieldset>
                                <p class="errors"><?php echo($_SESSION['errors']);?></p>
                            </fieldset>
                        <?php endif; ?>
                    </form>
                </section>
                <section id="socialInfo">
                    <h2>Suivez-moi</h2>
                    <ul>
                        <li>
                            <a href="http://lnkd.in/Z8HBPA" title="vister ma page linkedin" class="social icon-linkedin"><span>mon linkedin</span></a>
                        </li>
                        <li>
                            <a href="http://www.facebook.com/GioGio8" title="vister ma page facebook" class="social icon-facebook"><span>mon facebook</span></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/IacuzzoG" title="vister ma page twitter" class="social icon-twitter-bird"><span>mon twitter</span></a>
                        </li>
                    </ul>
                </section>
                <?php if(isset($_SESSION['errors'])): ?>
                    <div id="copy" class="copyErr">
                        <p>2012-Designed by Iacuzzo Giovanni©</p>
                    </div>
                <?php else: ?>
                    <div id="copy">
                        <p>2012-Designed by Iacuzzo Giovanni©</p>
                    </div>
                <?php endif; ?>
            </div>
        </footer>
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.8.2.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/plugins.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>