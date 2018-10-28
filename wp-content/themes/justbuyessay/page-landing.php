
<?
/*
 * Template name: Landing
 * */?>

<?php get_header(); ?>

<div class="triangles-bg">
    <svg class="icon-svg-par icon-svg-land_hero_base">
        <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-parallax.svg#land_hero_base"></use>
    </svg>
    <svg class="icon-svg-par icon-svg-land_hero_left">
        <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-parallax.svg#land_hero_left"></use>
    </svg>
    <svg class="icon-svg-par icon-svg-land_hero_right">
        <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-parallax.svg#land_hero_right"></use>
    </svg>

</div>

<div class="hero hero_land has-triangles">
    <div class="center hero__inner">
        <div class="hero__body">
            <div class="hero__title">Have your academic paper written by a professional writer</div>

            <div class="hero__descr">Just place an order, choose the most suitable writer, and watch him or her work.
                Pay only after you approve the received parts of your paper.
            </div>
        </div>
        <div class="hero__img">
            <svg class="icon-svg icon-winners">
                <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#winners"></use>
            </svg>
        </div>
    </div>
</div>


<div class="page-container page-about-us">
    <div class="center">
        <?php get_template_part( 'templates/content/sections/statistics-land');?>
    </div>

    <?php get_template_part( 'templates/content/sections/reviews-land');?>

    <div class="center center-cols">

        <!--begin main-->
        <main class="page-content">

            <?php get_template_part('loop'); ?>

        </main>
        <!-- end main -->
    </div>

    <div class="center">
        <?php get_template_part( 'templates/content/sections/reasons-horizontal');?>
    </div>
</div>

<?php get_footer(); ?>

