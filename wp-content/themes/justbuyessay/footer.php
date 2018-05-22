
<footer id="footer" class="footer">

    <div class="footer__top">

        <div class="center">
            <?php if (has_nav_menu('footer-nav')) : ?>
                <div class="footer__submenu">
                    <?php
                    $nav_args = array(
                        'theme_location'	=> 'footer-nav',
                        'container'			=> 'div',
                        'container_class'   => 'footer-nav',
                        'depth'				=> 1
                    );
                    wp_nav_menu( $nav_args );
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="footer__middle">
        <div class="center">
            <div class="footer__columns">

                <div class="footer__col">
                    <div class="footer-logo">
                        <a class="logo" href="<?php echo home_url(); ?>">
                            <img class="logo__img" src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="<?php bloginfo('name'); ?>" alt="logo" >
                        </a>
                    </div>
                </div>

                <div class="footer__col">

                    <div class="social-links">
                        <a class="social-link social-link_fb" rel="nofollow" target="_blank" href="">
                            <svg class="icon-svg icon-svg-fb">
                                <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#fb"></use>
                            </svg>
                        </a>
                        <a class="social-link social-link_tw" rel="nofollow" target="_blank" href="">
                            <svg class="icon-svg icon-svg-tw">
                                <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#tw"></use>
                            </svg>
                        </a>
                        <a class="social-link social-link_gp" rel="nofollow" target="_blank" href="">
                            <svg class="icon-svg icon-svg-gp">
                                <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#gp"></use>
                            </svg>
                        </a>
                        <a class="social-link social-link_in" rel="nofollow" target="_blank" href="">
                            <svg class="icon-svg icon-svg-in">
                                <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#in"></use>
                            </svg>
                        </a>
                    </div>

                    <div class="footer-terms">
                        <a href="#" data-crm-widget="termsPopup" data-tab="tos">Terms And Conditions Policy</a>
                    </div>
                </div>

                <div class="footer__col">

                    <div class="payments payments_footer">
                        <div class="payments__item">
                            <ul class="payments__services">
                                <li class="payments__service payments__service_visa"></li>
                                <li class="payments__service payments__service_mastercard"></li>
                                <li class="payments__service payments__service_paypal"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="center">
            <div class="footer__bottom-text">
                <p>All the papers you get at bestessay4u.com are meant for research purposes only. The papers are not
                    supposed to be submitted for academic credit.</p>
            </div>
        </div>
    </div>


</footer>

</div>
<!--END OUT-->

</body>
<?php wp_footer(); ?>

</html>
