<!--  begin benefits  -->

<?php if (!is_front_page()) : ?>
    <section class="section section_gray_light">
<?php else : ?>
    <section class="section">
<?php endif ?>

    <div class="center">

        <div class="benefits">
            <?php
            $data = array(
                array(
                    'cup',
                    'Top Quality ',
                    '100% plagiarism-free papers'
                ),
                array(
                    'medal',
                    'Native Writers',
                    'with Masters & PhDs'
                ),
                array(
                    'gift',
                    'Regular Bonuses',
                    'Money-back guarantee'
                )
            );

            foreach ($data as $item) : ?>

                <div class="benefits__item">
                    <div class="benefit">
                        <div class="benefit__img benefit__img_<?php echo $item[0]; ?>"></div>
                        <div class="benefit__body">
                            <div class="benefit__title"><?php echo $item[1]; ?></div>
                            <div class="benefit__text"><?php echo $item[2]; ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--  end benefits  -->
