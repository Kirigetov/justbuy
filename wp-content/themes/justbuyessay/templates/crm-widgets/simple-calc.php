<!--  begin simple-calc  -->
<section class="section section_dark">

    <div class="center">

        <div class="section-title section-title_white">
            <div class="section-type section-type_violet"><span> Calculate your order</span></div>

            See if we can do your order now
        </div>

        <div class="simple-calc">

            <?php ob_start(); ?>

            <div class="simple-calc__form">

                <div class="simple-calc__field">
                    <div class="simple-calc__select">{type_of_work}</div>
                </div>
                <div class="simple-calc__field">
                    <div class="simple-calc__select">{level_work}</div>
                </div>
                <div class="simple-calc__field">
                    <div class="simple-calc__select simple-calc__select_date">{urgency}</div>
                </div>
                <div class="simple-calc__field">
                    <div class="simple-calc__select">{number_page}</div>
                </div>

                <div class="simple-calc__field simple-calc__field_full">

                    <div class="simple-calc__total">{price}</div>

                    <div class="simple-calc__submit">{button}</div>
                </div>
            </div>

            <?php
            $params = json_encode([
                'theme' => 'raw',
                'template' => ob_get_clean(),
                'pdd' => [
                    'type_of_work' => 20,
                    'level_work' => 1,
                    'urgency' => 20,
                    'number_page' => 3
                ]
            ]);
            ?>
            <div data-crm-widget="simplePriceCalc" data-crm-simple-calc data-params='<?php echo $params; ?>'></div>

        </div>
    </div>
</section>
<!--  end simple-calc  -->