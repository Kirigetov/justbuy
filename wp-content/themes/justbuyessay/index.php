<?php get_header(); ?>

<!--MAIN-->
<div class="site_main site_tpl-index">
	<div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
            <div class="col-md-9">
		        <?php get_template_part('loop'); ?>
            </div>
        </div>
	</div>
</div>

<?php get_footer(); ?>
