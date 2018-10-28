<!--  begin reviews  -->
<section class="section section_rev_land">
    <div class="reviews-land-triangles">
        <svg class="icon-svg-par icon-svg-review_bg">
            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-parallax.svg#review_bg"></use>
        </svg>
    </div>

    <div class="center center_md_pad">

        <div class="section-title section-title_rev_land section-title_white">What our customers say</div>
        <div class="reviews-wrap">

            <div class="reviews reviews_land js-reviews-land">
                <?php
                $data = array(
                    array(
                        'I want to thank EssayAssistant.com and the writer! The paper was written very fast. My professor 
                        at the University had no comments and I got a good mark. This is what I call a good essay writing 
                        services. I was communicating with the writer all the time. ',
                        'true',
                        'English, Literature & Philology',
//                        '56784'
                    ),
                    array(
                        'I want to thank EssayAssistant.com and the writer! The paper was written very fast. My professor 
                        at the University had no comments and I got a good mark. This is what I call a good essay writing 
                        services. I was communicating with the writer all the time. ',
                        "true",
                        'English, Literature & Philology',
//                        '56784'
                    ),
                    array(
                        'I want to thank EssayAssistant.com and the writer! The paper was written very fast. My professor 
                        at the University had no comments and I got a good mark. This is what I call a good essay writing 
                        services. I was communicating with the writer all the time. ',
                        '9/10',
                        'English, Literature & Philology',
//                        '56784'
                    ),
                    array(
                        'I want to thank EssayAssistant.com and the writer! The paper was written very fast. My professor 
                        at the University had no comments and I got a good mark. This is what I call a good essay writing 
                        services. I was communicating with the writer all the time. ',
                        "true",
                        'English, Literature & Philology',
//                        '56784'
                    ),
                    array(
                        'I want to thank EssayAssistant.com and the writer! The paper was written very fast. My professor 
                        at the University had no comments and I got a good mark. This is what I call a good essay writing 
                        services. I was communicating with the writer all the time. ',
                        '9/10',
                        'English, Literature & Philology',
//                        '56784'
                    ),
                );

                foreach ($data as $item) : ?>

                    <div class="reviews__item">
                        <div class="review">
                            <div class="review-rate">
                                <div class="review-rate__title">Customer feedback: </div>
                                <div class="review-rate__stars">

                                    <?php if (in_array('9/10', $item, true)) { ?>
                                        <svg class="icon-svg icon-svg-star">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#star"></use>
                                        </svg>
                                        <svg class="icon-svg icon-svg-star">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#star"></use>
                                        </svg>
                                        <svg class="icon-svg icon-svg-star">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#star"></use>
                                        </svg>
                                        <svg class="icon-svg icon-svg-star">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#star"></use>
                                        </svg>
                                        <svg class="icon-svg icon-svg-star">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#star"></use>
                                        </svg>
                                        <svg class="icon-svg icon-svg-star">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#star"></use>
                                        </svg>
                                        <svg class="icon-svg icon-svg-star">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#star"></use>
                                        </svg>
                                        <svg class="icon-svg icon-svg-star">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#star"></use>
                                        </svg>
                                        <svg class="icon-svg icon-svg-star">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#star"></use>
                                        </svg>
                                        <svg class="icon-svg icon-svg-star_blue">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#star_blue"></use>
                                        </svg>
                                    <?php } else { ?>
                                        <svg class="icon-svg icon-svg-star">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#star"></use>
                                        </svg>
                                        <svg class="icon-svg icon-svg-star">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#star"></use>
                                        </svg>
                                        <svg class="icon-svg icon-svg-star">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#star"></use>
                                        </svg>
                                        <svg class="icon-svg icon-svg-star">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#star"></use>
                                        </svg>
                                        <svg class="icon-svg icon-svg-star">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#star"></use>
                                        </svg>
                                        <svg class="icon-svg icon-svg-star">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#star"></use>
                                        </svg>
                                        <svg class="icon-svg icon-svg-star">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#star"></use>
                                        </svg>
                                        <svg class="icon-svg icon-svg-star">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#star"></use>
                                        </svg>
                                        <svg class="icon-svg icon-svg-star">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#star"></use>
                                        </svg>
                                        <svg class="icon-svg icon-svg-star">
                                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#star"></use>
                                        </svg>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="review__body">
                                <div class="review__text"><?php echo $item[0]; ?></div>
                            </div>

                            <div class="review-info">
                                <div class="review-info__title">Subject:</div>
                                <div class="review-info__subject"><?php echo $item[2]; ?></div>
                                <!--                                    <div class="review-info__writer">Writer ID: --><?php //echo $item[3]; ?><!--</div>-->
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>

            <div class="reviews-arrows reviews-arrows_land">
                <div class="review-arrow review-arrow_left js-review-arrow-left">
                    <svg class="icon-svg icon-svg-right-arrow">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#right-arrow"></use>
                    </svg>
                </div>
                <div class="review-arrow review-arrow_right js-review-arrow-right">
                    <svg class="icon-svg icon-svg-right-arrow">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#right-arrow"></use>
                    </svg>
                </div>
            </div>

        </div>
    </div>
</section>
<!--  end reviews  -->