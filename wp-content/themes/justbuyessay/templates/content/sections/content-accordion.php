<section id="content_block" class="section">

    <div class="center">

        <div class="section-title">
            <div class="section-type section-type_blue"><span>Testimonials</span></div>

            Your Studies Get Easier with <br>
            Our Expert Essay Writing Service
        </div>

<!--        --><?php
//        function addAccordion ( $text ){
//            $pattern = '/(<(h[1-6])>[\w\s\/$%#{}[\].:\\@!,+();&<>"\'^*?=~`-–_]*?<\/h[1-6]>)/i';
//            $result = preg_replace($pattern, "</div><div data-accordion='header' class='content-accordion__header'>$1</div><div data-accordion='body' class='content-accordion__body'>", $text);
//            $pos = strpos($result, '</div>');
//            return substr_replace($result, '', $pos, 6) . '</div>';
//        }
//        add_filter('the_content', 'addAccordion');
//        ?>

        <div id="content_block" class="content-accordion js-content-accordion">

            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
                        <div data-accordion="container" class="content-accordion__container">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>

        <div class="btn-wrap">
            <a href="/order" class="btn btn_orange btn-lg btn-hover js-btn-hover">order now</a>
        </div>

    </div>

</section>