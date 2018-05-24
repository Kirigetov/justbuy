<!--  begin features  -->
<section class="section section-col">
    <div class="center">
        <div class="section-title section-title_green">Outstanding Quality You’ve Been Looking For</div>
        <div class="features">

        <?php
        $data = array(
            array(
                'file',
                'PAPERS DELIVERED',
                'ON TIME',
                'Choose any delivery time between 3 hours and 20 days — we’ll deliver your paper by the deadline.'
            ),
            array(
                'chat',
                'UP TO 4 WEEKS OF FREE',
                'REVISIONS',
                'Enjoy an unlimited number of free amendments to your paper within 2-4 weeks after downloading.'
            ),
            array(
                'connection',
                'CONNECT WITH',
                'YOUR WRITER',
                'Sign in to stay in touch with your writer via the message board. Offer ideas and leave feedback.'
            ),
            array(
                'lifesaver',
                '24/7',
                'AVAILABILITY',
                'We are available via phone, email and live chat. Reach out to get any help you might need.'
            )
        ); ?>

        <?php foreach ($data as $key=>$item) : ?>

            <div class="features__item">
                <div class="feature">
                    <div class="feature__img">
                        <svg class="icon-svg icon-<?php echo $item[0]; ?>">
                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#<?php echo $item[0]; ?>"></use>
                        </svg>
                    </div>

                    <?php if ($key == 3) : ?>
                        <div class="feature__title"> <span class="feature__title_blue"><?php echo $item[1]; ?></span>
                            <br><?php echo $item[2]; ?></div>
                    <?php else : ?>
                        <div class="feature__title"><?php echo $item[1]; ?> <span class="feature__title_blue"><?php echo $item[2]; ?></span></div>
                    <?php endif;?>
                    <div class="feature__text"><?php echo $item[3]; ?></div>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
    </div>
</section>
<!--  end features  -->