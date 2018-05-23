<!--  begin features  -->
<section class="section section-col">
    <div class="section-title"> Why choose us?</div>

    <div class="features">

        <?php
        $data = array(
            array(
                '1',
                'school-material',
                'Unique Texts',
                'You’ll have original work every time.'
            ),
            array(
                '2',
                'wall-calendar',
                'Get Quick Results',
                'Response time to a customer request is less than a minute.'
            ),
            array(
                '3',
                'ringing',
                'Support 24/7',
                'We can write your essay even with 3 hrs. deadline.'
            )
        ); ?>

        <?php foreach ($data as $item) : ?>

            <div class="features__item">
                <div class="feature">
                    <div class="feature__img">
                        <svg class="icon-svg icon-<?php echo $item[1]; ?>">
                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#<?php echo $item[1]; ?>"></use>
                        </svg>
                    </div>
                    <div class="feature__body">
                        <div class="feature__title"><?php echo $item[2]; ?></div>
                        <div class="feature__text"><?php echo $item[3]; ?></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!--  end features  -->