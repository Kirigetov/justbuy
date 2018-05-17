<!--  begin reviews single  -->
<section class="section">

    <div class="center">

        <div class="reviews-slider-wrap">
            <div class="reviews-slider js-review-slider">
                <?php
                $data = array(
                    array(
                        'The ceremony was great and I am satisfied with the outcome. The author helped me with my 
                        thesis each step along the way, from the first draft into the last chapter. Because of him 
                        the entry went easily. I\'d certainly recommend this site for my friends, since it secures 
                        and delivers on the promises.'
                    ), array(
                        'I have been using this website because 2014, and I never have a opportunity to regret it! 
                        The best writer is fantastic! They contacted me every single time throughout the composing 
                        process and delivered the very best papers to me! I am so grateful to your website and client 
                        service group and I won\'t ever forget your help!'
                    ), array(
                        'As an international student from China, I had challenging courses this period, and also 
                        Master Papers helped me. Every paper I got this was written professionally and consistent 
                        with all of my needs. I always run them for plagiarism and they come up clean every time. I 
                        love that I can get help with any issue in one area. Thank you very much!'
                    )
                );

                foreach ($data as $item) : ?>

                <div class="reviews-slider__item">
                    <div class="review-slider">
                        <div class="review-slider__img"></div>

                        <div class="review-slider__body">
                            <div class="review-slider__text"><?php echo $item[0]; ?></div>
                        </div>

                        <div class="review-slider__rating">
                        </div>
                    </div>

                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>
<!--  end reviews single  -->