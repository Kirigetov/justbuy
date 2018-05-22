<?php
/* Template Name: Order */

get_header(); ?>

    <div class="page-container page-container_pad_top">

        <!--begin main-->
        <main class="page-content">
			<div class="center">
                <?php get_template_part( './loop');?>
			</div>
        </main>
        <!--end main-->

    </div>

<?php get_footer(); ?>