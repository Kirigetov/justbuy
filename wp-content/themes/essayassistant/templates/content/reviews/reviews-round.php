<!--  begin reviews round  -->
<section class="section section_gray_light">

    <div class="center">

        <div class="reviews-wrap">
            <div class="reviews reviews_round js-review-round-slider">
                <?php
                $data = array(
                    array(
                        '/img/user3.jpg ',
                        'Merry, Boston (MA)',
                        'I needed a super urgent essay on the Civil War due in'
                    ),
                    array(
                        '/img/user4.jpg',
                        'Olivia, Ostin (TX)',
                        'It meets the requirements of my assignment'
                    ),
                    array(
                        '/img/user5.jpg',
                        'Brendon, St Paul (MN)',
                        'It meets the requirements of my assignment'
                    )
                );

                foreach ($data as $item) : ?>

                    <div class="reviews__item">
                        <div class="review-round">
                            <div class="review-round__img">
                                <img src="<?php bloginfo('template_url'); ?><?php echo $item[0]; ?>"/>
                            </div>
                            <div class="review-round__body">
                                <div class="review-round__title"><?php echo $item[1]; ?></div>
                                <div class="review-round__text"><?php echo $item[2]; ?></div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- end reviews round  -->