
<?
/*
 * Template name: Prices
 * */?>

<?php get_header(); ?>

<div class="page-container page-container_pad_top">

    <!--begin main-->
    <main class="page-content">

        <section class="section section_gray_light">

            <div class="center">

                <div class="text-block">

                    <div class="h1">Our Relationship Starts with <br>Loyalty</div>

                    <p class="text">At Masterpapers.com, we value our customers and are grateful to them for staying
                        with us. To show that, we have come up with a Bonus system that lets you save money on
                        outstanding papers. The more papers you order from us, the less you will need to pay
                        in the future!</p>
                </div>

                <div class="text-block">
                    <div class="h1">How Our <br> Loyalty Program Works</div>

                    <?php get_template_part( 'templates/content/sections/loyalty');?>
                </div>

                <div class="text-block">
                    <div class="h1">With Our Special Offers,<br> You Pay Even Lessy</div>

                    <p class="text">The Loyalty Program is not the only way to save money. Every now and then, we
                        run promo campaigns where customers can get substantial discounts on papers and gift
                        services. Just leave us your email to start getting exclusive offers from GradeMiners
                        to your inbox.</p>
                </div>

                <div class="text-block">

                    <div class="h1">See How Many Bonus Points You’ll <br> Get for Your Next Purchase</div>

                    <p class="text">Planning to order a paper? See how much it costs and how much Bonus Money you will
                        get for it. Just select the type of paper, pick the number of pages, and get an instant quote.</p>
                </div>

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

