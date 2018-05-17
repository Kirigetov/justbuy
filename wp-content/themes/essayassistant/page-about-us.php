
<?
/*
 * Template name: About-Us
 * */?>

<?php get_header(); ?>

<div class="page-container page-container_pad_top">

    <!--begin main-->
    <main class="page-content">

        <?php get_template_part( 'templates/content/sections/about-us-description');?>
        <?php get_template_part( 'templates/content/sections/like-us');?>
        <?php get_template_part( 'templates/content/reviews/reviews-single');?>
        <?php get_template_part( 'templates/content/reviews/reviews-round');?>

    </main>
    <!--end main-->

</div>

<?php get_footer(); ?>

