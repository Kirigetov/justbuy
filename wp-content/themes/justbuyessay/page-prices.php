
<?
/*
 * Template name: Prices
 * */?>

<?php get_header(); ?>


<div class="triangles-bg">
    <svg class="icon-svg-par icon-svg-par_desktop icon-svg-hero_price_bg_2">
        <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-parallax.svg#hero_price_bg_2"></use>
    </svg>
    <svg class="icon-svg-par icon-svg-par_desktop icon-svg-hero_price_bg_1">
        <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-parallax.svg#hero_price_bg_1"></use>
    </svg>
    <svg class="icon-svg-par icon-svg-par_mob icon-svg-hero_price_mob_1">
        <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-parallax.svg#hero_price_bg_mob"></use>
    </svg>
    <svg class="icon-svg-par icon-svg-par_mob icon-svg-par_reverse icon-svg-hero_price_mob_2">
        <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-parallax.svg#hero_price_bg_mob"></use>
    </svg>
</div>

<div class="hero hero_price has-triangles">
    <div class="center hero__inner">
        <div class="hero__title hero__title_blue section-title">price tables</div>
    </div>
</div>

<div class="page-container page-price">

    <!--begin main-->
    <main class="page-content">

        <section class="section section_first_sm">
            <div class="center">

                <?php get_template_part( './loop');?>

            </div>
        </section>

        <section class="section section_sm">
            <div class="center">

                <div class="section-header">
                    <div class="section-title section-title_blue">Why do our prices vary?</div>
                    <div class="section-subtitle">There are several factors that determine pricing</div>
                </div>

                <div class="price-factors">
                    <div class="price-factors__col">
                        <img class="price-factors__img" src="<?php bloginfo('template_url'); ?>/img/bill.svg" alt="">
                    </div>

                    <div class="price-factors__col">
                        <ul class="price-factors__list">
                            <li class="price-factors__item">
                                <div class="price-factors__item-title">Paper topic</div>
                                <div class="price-factors__item-body">Some topics require much dedication and time investment due to in-depth research.</div>
                            </li>
                            <li class="price-factors__item">
                                <div class="price-factors__item-title">Urgency</div>
                                <div class="price-factors__item-body">Orders with deadlines of 3-48 hours are the most expensive.</div>
                            </li>
                            <li class="price-factors__item">
                                <div class="price-factors__item-title">Writer availability</div>
                                <div class="price-factors__item-body">Due to their heavy workload, the writer may set a higher price on your order.</div>
                            </li>
                            <li class="price-factors__item">
                                <div class="price-factors__item-title">Seasonality</div>
                                <div class="price-factors__item-body">As a rule prices are slightly higher during the high season that lasts from October till December.</div>
                            </li>
                            <li class="price-factors__item">
                                <div class="price-factors__item-title">Writer level</div>
                                <div class="price-factors__item-body">Writers with more experience and high customer ratings usually set higher prices.</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section_sm">
            <div class="center">

                <div class="section-header">
                    <div class="section-title section-title_blue">WHAT’S IN IT FOR YOU</div>
                    <div class="section-subtitle">Check out what features we offer to keep our customers comfortable.</div>
                </div>

                <div class="price-features">
                    <div class="price-features__col">
                        <div class="price-feature">
                            <div class="price-feature__title">Basic Services</div>
                            <ul class="price-feature__list price-feature__list_basic">
                                <li class="price-feature__list-item">FREE preferred helper</li>
                                <li class="price-feature__list-item">Instant matching with an expert</li>
                                <li class="price-feature__list-item">3-hour turnaround for urgent requests</li>
                                <li class="price-feature__list-item">Direct messaging with your helper</li>
                                <li class="price-feature__list-item">FREE messages and notifications</li>
                                <li class="price-feature__list-item">Up to 4 weeks of FREE amendments</li>
                                <li class="price-feature__list-item">24/7 customer service</li>
                            </ul>
                        </div>
                    </div>
                    <div class="price-features__col">
                        <div class="price-feature">
                            <div class="price-feature__title">Optional Features</div>
                            <ul class="price-feature__list price-feature__list_add">
                                <li class="price-feature__list-item price-feature__list-item_flex">
                                    <span>Top helper </span>
                                    <span>$14,99</span>
                                </li>
                                <li class="price-feature__list-item price-feature__list-item_flex">
                                    <span>Plagiarism report</span>
                                    <span>$5,39</span>
                                </li>
                                <li class="price-feature__list-item price-feature__list-item_flex">
                                    <span>VIP Support</span>
                                    <span>$9,99</span>
                                </li>
                                <li class="price-feature__list-item price-feature__list-item_flex">
                                    <span>!!!!!Top helper </span>
                                    <span>$14,99</span>
                                </li>
                                <li class="price-feature__list-item price-feature__list-item_flex">
                                    <span>!!!!!Plagiarism report</span>
                                    <span>$5,39</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php get_template_part( 'templates/crm-widgets/email-collector2');?>

    </main>
    <!--end main-->

</div>

<?php get_footer(); ?>

