<!--  begin guarantees  -->
<section class="section section_gray_light">

    <div class="center">

        <div class="section-title">
            <div class="section-type section-type_blue"><span>Guarantees</span></div>

            What's in it for me?
        </div>

        <div class="simple-carts-wrap">
            <div class="simple-carts simple-carts_guarantee js-slider-guarantees">

                <?php
                $data = array(
                    array(
                        '1',
                        'High-quality content',
                        'All members of our team are professionals who have been through several stages of the hiring 
                        process: passing grammar texts, editing texts in various styles and subjects, completing
                         several probationary orders. Every person in our squad passes monthly assessment test, takes 
                         part in weekly seminars to boost his/ her skills and be in the loop of writing standards.'
                    ),
                    array(
                        '2',
                        'Proofreading & editing policy',
                        'Our writers, proofreaders, and editors are using leading plagiarism scanning platforms to 
                        make sure all content is 100% unique. Moreover, we take formatting seriously and double check 
                        all papers to ensure everything complies with the rules of a specific writing format. 
                        Admittedly, the text our clients receive has zero grammar mistakes, spelling errors or any 
                        other misprints.'
                    ),
                    array(
                        '3',
                        'Complete privacy guarantee',
                        'We know that some students refuse to try writing services because they are afraid of getting
                         expelled. Thuswise, it`s our priority to make all our customers feel secure and safe. Our 
                         advanced information technology specialists have versatile data protection systems that keep 
                         all the information about our clients and orders private. No third parties will be able to 
                         find out about your secret helpers.'
                    ),
                    array(
                        '4',
                        'Money back assurance',
                        'If you feel that our writer misrepresented something, or didn`t address all the questions on 
                        your assignment brief, you can ask for a refund. Plus, you can demand free revision within 
                        14-30 days. Revision or refund requests should be sent within 2 weeks period after the paper 
                        was delivered to you. If you haven`t downloaded your text, you will get 100% money-back. All 
                        approved refunds will be returned to client`s bonus Balance or credit card.'
                    ),
                    array(
                        '5',
                        '24/7 Customer support Service',
                        'Our customer support team is working 24/7 non-top to make sure our clients are satisfied and
                         get all the information they need. You can contact our customer support representative to 
                         clear out any issues concerning payment process, communication with the writer and more. Just 
                         join the live chat to get the necessary assistance.'
                    )
                );

                foreach ($data as $item) : ?>
                    <div class="simple-carts__item">
                        <div class="simple-cart">
                            <div class="simple-cart__img-wrap">
                                <div class="simple-cart__img simple-cart__img_<?php echo $item[0]; ?>"></div>
                            </div>
                            <div class="simple-cart__body">
                                <div class="simple-cart__title"><?php echo $item[1]; ?></div>
                                <div class="simple-cart__text"><?php echo $item[2]; ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="btn-wrap">
            <a href="/order" class="btn btn_orange btn-lg btn-hover js-btn-hover">order now</a>
        </div>
    </div>
</section>
<!--  end guarantees  -->