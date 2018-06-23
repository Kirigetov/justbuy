<?php
/* Template Name: Order */

get_header(); ?>

    <div class="page-container page-container_pad_top">

        <!--begin main-->
        <main class="page-content">
			<div class="center">

                <section class="section">
                    <div class="container">
                        <div class="section-header">
                            <div class="section-title section-title_blue">Give us your instructions </div>
                            <div class="section-subtitle">Fill out a quick order form describing your assignment and pick a deadline.</div>
                        </div>

                        <div class="order-form">
                            <?php

                            ob_start();

                            ?>
                                <div class="order-form__inner">
                                    <div class="order-form__section">
                                        <div class="order-form__section-title">Order details</div>

                                        <div class="order-form__section-body">
                                            <div class="order-form__field">
                                                {type_of_work}
                                            </div>
                                            <div class="order-form__field">
                                                {paper_subject}
                                            </div>
                                            <div class="order-form__field">
                                                {topic}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="order-form__section">
                                        <div class="order-form__section-title">Requirements for work</div>

                                        <div class="order-form__section-body">
                                            <div class="order-form__field">
                                                {level_work}
                                            </div>

                                            <div class="order-form__field order-form__field_cols">
                                                {number_page}
                                                {number_page_services}
                                                {number_of_source}
                                            </div>

                                            <div class="order-form__field">
                                                {urgency}
                                            </div>

                                            <div class="order-form__field">
                                                {language_work}
                                            </div>

                                            <div class="order-form__field">
                                                <span class="control-label">Instructions</span>
                                                {instruction}
                                                <span class="control-label upload-files-title">Upload task files</span>
                                                {file}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="order-form__section">
                                        <div class="order-form__section-title">Personal information</div>

                                        <div class="order-form__section-body">
                                            <div class="order-form__field order-form__field_cols">
                                                {email}
                                                {phone}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="order-form__section">
                                        <div class="order-form__section-title">Additional features</div>

                                        <div class="order-form__section-body">
                                            <div class="order-form__field">
                                                {instruction_services}
                                                {urgency_services}
                                                {email_services}
                                                {language_style_services}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="order-form__footer">
                                        <div class="order-form__field order-form__field_cols">
                                            {preferred_writer_id}
                                            {code}
                                        </div>
                                    </div>
                                </div>

                        </div>

                            <?php

                            $params = json_encode([
                                "EssayForm" => [
                                    "as" => [
                                        "top_writer" => 1,
                                        "sms_info" => 1,
                                    ]
                                ],
                                'theme' => 'raw',
                                'template' => ob_get_clean(),
                                'source' => 'simple',
                                'field_it' => '{label}{hint}{input}{error}',
                                'file_it' => '<label for="essayform-file" class="owb2-dropzone-label"><div data-role="dropZone" class="owb2-dropzone">' .
                                    '<div data-label="uploaded"></div>' .
                                    '{input}' .
                                    '</div></label>' .
                                    '{error}',
                                'file_item_it' => '<div class="file-item">' .
                                    '<div data-label="name"></div>' .
                                    '<div data-role="remove"></div>' .
                                    '</div>',
                                'instruction_it' => '' .
                                    '{hint}' .
                                    '{input}' .
                                    '{error}',
                                'instruction_o' => ['placeholder' => 'Enter your instructions.'],
                                'login_button_ot' => '<div class="field">{login_button}</div>',
                                'allowed_bonus_ot' => '<div class="bonus-allowed"><span class="bonus-allowed-number">{allowed_bonus}</span> available</div>',
                                'instruction_service_plagiarism_report_it' => '{label}{input}{hint}{price}',
                                'instruction_service_top_writer_it' => '{label}{input}{hint}{price}',
                                'email_service_vip_support_it' => '{label}{input}{hint}{price}',
                                'instruction_service_extended_revision_it' => '{label}{input}{hint}{price}',
                                'urgency_service_quality_check_it' => '{label}{input}{hint}{price}',
                                'urgency_service_high_priority_it' => '{label}{input}{hint}{price}',
                                'urgency_service_draft_needed_it' => '{label}{input}{hint}{price}',
                                'language_style_service_one_page_summary_it' => '{label}{input}{hint}{price}',
                                'phone_service_sms_info_it' => '{input}{label}{hint}',
                                'email_services_it' => '{input}{label}{hint}',
                                'phone_services_ot' => '<div class="custom-checkbox">' .
                                    '{phone_services}' .
                                    '</div>',
                                'login_button_o' => ['class' => 'owb2-btn-login'],
                                'code_o' => ['placeholder' => ''],
                            ]);
                            ?>

                            <div data-crm-widget="form" data-params='<?php echo $params; ?>'></div>

                    </div>
                </section>
			</div>
        </main>
        <!--end main-->

    </div>

<?php get_footer(); ?>


<!--                                    <div class="owb2-section-total owb2-section-price">-->
<!--                                        <div class="sign-in-desktop">-->
<!--                                            <div class="sign-in-block">-->
<!--                                                {login_button}-->
<!--                                                {error}-->
<!--                                                <span class="sign-in-desc">to use your bonus money</span>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        {bonus}-->
<!--                                        {allowed_bonus}-->
<!--                                        <div class="owb2-grid">-->
<!--                                            <div class="owb2-block flex-align-center">-->
<!--                                                <div class="owb2-total">-->
<!--                                                    <div class="owb2-price-total">{total}</div>-->
<!--                                                    <div class="owb2-price-new">-->
<!--                                                        <span class="owb2-price-new-label">Total Price: {new_total}</span>-->
<!--                                                    </div>-->
<!--                                                    <div class="owb2-price-per-page">{cpp}</div>-->
<!--                                                    <div class="of-form-loader">-->
<!--                                                        <span class="of-loader-text">loading...</span>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="owb2-block flex-align-center text-right">-->
<!--                                                <button class="owb2-submit" type="submit">Proceed to payment</button>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->


<!--                                    <div class="owb2-sidebar owb2-add-services">-->
<!--                                    <span class="owb2-section-title">Add-on services</span>-->
<!--                                    <div class="owb2-section-body">-->
<!--                                        <div class="owb2-section-label  js-add-on-services-inputs">-->
<!--                                            {instruction_services}-->
<!--                                            {urgency_services}-->
<!--                                            {email_services}-->
<!--                                            {language_style_services}-->
<!--                                        </div>-->
<!--<div class="owb2-section-desc">
    Click on the button below to select ALL add-ons<br> and get a <span>25% discount.</span>
</div>
<div class="owb2-block flex-align-center text-right">
    <div class="owb2-submit-discount" id="owb2-submit-discount">Order with a 25%
        discount
    </div>
</div>-->

