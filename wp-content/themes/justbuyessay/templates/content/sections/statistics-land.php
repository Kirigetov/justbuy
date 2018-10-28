<!--  begin statistics  -->
<section class="section section_stat_land section_no_pad_top">
    <div class="section-title">Our stats</div>

    <div class="triangles-stat">
        <svg class="icon-svg-par icon-svg-par_gray icon-svg-land_stat_1">
            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-parallax.svg#land_stat_1"></use>
        </svg>
        <svg class="icon-svg-par icon-svg-par_gray icon-svg-land_stat_2">
            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-parallax.svg#land_stat_2"></use>
        </svg>
    </div>

    <div class="statistics statistics_land">

        <?php
        $data = array(
            array(
                '105 629',
                'VISITORS'
            ),
            array(
                '9.5',
                'AVERAGE QUALITY SCORE',
                'out of 10'
            ),
            array(
                '665',
                'WRITERS ACTIVE'
            ),
            array(
                '65',
                'WRITERS ONLINE NOW'
            )
        ); ?>

        <?php foreach ($data as $key=>$item) : ?>

            <div class="statistics__item">
                <div class="statistic statistic_land">
                    <?php if ($key == 1) : ?>
                        <div class="statistic__value"><?php echo $item[0]; ?><span>
                                <span class="hidden_xxs"> out of</span>
                                <span class="visible_xxs"> / </span> 10</span></div>
                    <?php else : ?>
                        <div class="statistic__value"><?php echo $item[0]; ?></div>
                    <?php endif;?>
                    <div class="statistic__text"><?php echo $item[1]; ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!--  end statistics  -->