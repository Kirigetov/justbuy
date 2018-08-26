
<?
/*
 * Template name: Front-Page
 * */?>

<?php get_header(); ?>

<div class="triangles-bg">
<!--    <img src="--><?php //bloginfo('template_url'); ?><!--/img/hero_bg_2.svg" alt="">-->
    <svg class="icon-svg-par icon-svg-hero_bg_1">
        <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-parallax.svg#hero_bg_1"></use>
    </svg>
    <svg class="icon-svg-par icon-svg-hero_bg_2">
        <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-parallax.svg#hero_bg_2"></use>
    </svg>
</div>

<?php get_template_part( 'templates/content/hero/hero');?>

    <div class="page-container">

        <!--begin main-->
        <main class="page-content">
            <div class="center">
                <div class="section-cols">
                    <?php get_template_part( 'templates/content/sections/reasons');?>
                    <?php get_template_part( 'templates/content/sections/statistics');?>
                </div>
            </div>

            <?php get_template_part( 'templates/content/sections/features');?>
            <?php get_template_part( 'templates/content/sections/support');?>
<!--            --><?php //get_template_part( 'templates/crm-widgets/last-orders');?>
<!--            --><?php //get_template_part( 'templates/content/reviews/reviews-block');?>
            <?php get_template_part( 'templates/content/sections/content-accordion');?>
            <?php get_template_part( 'templates/crm-widgets/email-collector');?>

        </main>
        <!--end main-->

    </div>

<?php get_footer(); ?>
