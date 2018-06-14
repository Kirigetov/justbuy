
<?
/*
 * Template name: Prices
 * */?>

<?php get_header(); ?>

<div class="page-container page-price">

    <!--begin main-->
    <main class="page-content">

        <section class="section">

            <div class="center">

                <div class="section-title section-title_blue">Price Table</div>

                <?php get_template_part( './loop');?>

                <div class="text-block">
                    <p class="text">Join 200,000 students, who get great papers for less. Make your first order now and get your first bonus!</p>
                </div>

                <div class="btn-wrap btn-wrap_mt">
                    <a href="/order" class="btn btn_orange btn-lg btn-hover js-btn-hover">MAKE ORDER</a>
                </div>
            </div>
        </section>

    </main>
    <!--end main-->

</div>

<?php get_footer(); ?>

