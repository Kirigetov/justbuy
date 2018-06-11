<!--  begin statistics  -->
<section class="section section-col">
    <div class="section-title section-title_left">Our stats</div>

    <div class="statistics">

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
                <div class="statistic">
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