<!--  begin simple-calc  -->
<section class="section">

    <div class="center">

        <div class="section-title">
            <div class="section-type section-type_green"><span>Testimonials</span></div>

            Our clients reviews
        </div>

        <div class="reviews-wrap">
            <div class="reviews reviews_block js-slider-reviews">
            <?php
                $data = array(
                    array(
                        '/img/user1.jpg',
                        'Bethany Harold Mckayla',
                        '3 weeks ago',
                        'I’m really thankful for your help and especially I would like to thank my tutor, Darren, 
                        who mentored me through the semester. I wouldn’t be able to finish the semester without your
                         piece of advice. Everyone should try this service, and ask for Darren, he’s the best
                          at Natural Sciences!'
                    ),
                    array(
                        '/img/user2.jpg',
                        'Reuben Randall',
                        '6 weeks ago',
                        'I was struggling with Math for ages because my teacher always made me redo the whole work. 
                        I contacted this service, and finally, I received the help I needed. You did a great job, 
                        thank you!'
                    )
                );

                foreach ($data as $item) : ?>

                    <div class="reviews__item">
                        <div class="review">
                            <div class="review__header">
                                <div class="review__img">
                                    <img src="<?php bloginfo('template_url'); ?><?php echo $item[0]; ?>"/>
                                </div>

                                <div class="review__details">
                                    <div class="review__author">
                                        <div class="review__name"><?php echo $item[1]; ?></div>
                                    </div>

                                    <div class="review__info">
                                        <span class="review__date"><?php echo $item[2]; ?></span>
                                    </div>
                                </div>

                            </div>
                            <div class="review__body">
                                <div class="review__text"><?php echo $item[3]; ?></div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>