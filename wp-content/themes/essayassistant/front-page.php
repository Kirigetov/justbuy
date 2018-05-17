
<?
/*
 * Template name: Front-Page
 * */?>

<?php get_header(); ?>

<div class="triangles-bg">
    <svg class="icon-svg icon-svg-hero_bg_2">
        <use xlink:href="<?php bloginfo('template_url'); ?>/img/hero_bg_1.svg"></use>
    </svg>
<!--    <img src="--><?php //bloginfo('template_url'); ?><!--/img/hero_bg_1.svg" alt="">-->
<!--    <svg class="icon-svg icon-svg-hero_bg_1">-->
<!--        <use xlink:href="--><?php //bloginfo('template_url'); ?><!--/img/sprite-svg-parallax.svg#hero_bg_1"></use>-->
<!--    </svg>-->
    <svg class="icon-svg icon-svg-hero_bg_2">
        <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-parallax.svg#hero_bg_2"></use>
    </svg>
</div>

<?php get_template_part( 'templates/content/hero/hero');?>

    <div class="page-container">

        <!--begin main-->
        <main class="page-content">

            <?php get_template_part( 'templates/content/sections/features');?>
            <?php get_template_part( 'templates/crm-widgets/simple-calc');?>
            <?php get_template_part( 'templates/content/reviews/reviews-block');?>
            <?php get_template_part( 'templates/content/sections/how-it-works');?>
            <?php get_template_part( 'templates/content/sections/content-accordion');?>

        </main>
        <!--end main-->

    </div>

<?php get_footer(); ?>
