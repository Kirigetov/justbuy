<?php get_header(); ?>

<?php get_template_part( 'templates/content/hero/hero-second');?>

<div class="page-container">

    <!--begin main-->
    <main class="page-content">

        <?php get_template_part( 'templates/content/sections/benefits');?>

        <section class="section">

            <div class="center">
                <?php get_template_part( './loop');?>

                    <div class="btn-wrap btn-wrap_mt">
                        <a href="/order" class="btn btn_orange btn-lg btn-hover js-btn-hover">order now</a>
                    </div>
            </div>
        </section>

    </main>
    <!--end main-->

</div>

<?php get_footer(); ?>
