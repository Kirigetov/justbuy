<!--  begin items-cards  -->

    <div class="items-cards js-items-cards">

            <?php foreach ($data as $item) : ?>

                <div class="items-cards__item">
                    <div class="item-card">
                        <div class="item-card__img">
                            <svg class="icon-svg icon-<?php echo $item[1]; ?>">
                                <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#<?php echo $item[1]; ?>"></use>
                            </svg>
                        </div>
                        <div class="item-card__body">
                            <div class="item-card__title"><?php echo $item[2]; ?></div>
                            <div class="item-card__text"><?php echo $item[3]; ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

<!--  end items-cards  -->
