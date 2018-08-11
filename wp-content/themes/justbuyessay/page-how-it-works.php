
<?
/*
 * Template name: How-it-works
 * */?>

<?php get_header(); ?>

<div class="page-container page-price">

    <!--begin main-->
    <main class="page-content">

        <section class="section section_top-sm">
            <div class="center">
                <div class="section-title section-title_blue">How it works</div>




                    <div class="how-steps">
                        <ul class="how-steps__list">
                            <?php
                            $data = array(
                                array(
                                    '/img/how1.svg',
                                    'Create an order',
                                    '1',
                                    'Enter your email, the type of paper you need, and specify your assignment details.'
                                ),
                                array(
                                    '/img/how2.svg',
                                    'Choose the writer',
                                    '2',
                                    'Our writers will bid for your project. Review the candidates, talk to them and decide which is the best one for you.'
                                ),
                                array(
                                    '/img/how3.svg',
                                    'Supervise the process',
                                    '3',
                                    'We accept corrections while the work is in the process. You have full control of what the final product will look like.'
                                ),
                                array(
                                    '/img/how4.svg',
                                    'Receive the paper',
                                    '4',
                                    'After receiving the final paper from your writer with all of your revisions, release the payment, submit your assignment and pat yourself on the back.'
                                )
                            );

                            foreach ($data as $item) : ?>

                            <li class="how-steps__item">
                                <div class="how-step">
                                    <div class="how-step__section">
                                        <div class="how-step__img">
                                            <img src="<?php bloginfo('template_url'); ?><?php echo $item[0]; ?>"/>
                                        </div>
                                    </div>
                                    <div class="how-step__section">
                                        <div class="how-step__body">
                                            <div class="how-step__title"><?php echo $item[1]; ?></div>
                                            <div class="how-step__value"><?php echo $item[2]; ?></div>
                                            <div class="how-step__text"><?php echo $item[3]; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <?php endforeach; ?>
                        </ul>
                    </div>
            </div>
        </section>

    </main>
    <!--end main-->

</div>

<?php get_footer(); ?>

