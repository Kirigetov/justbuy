<!DOCTYPE html>

<html>
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></title>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<!--    <script src="/crm-widget.php"></script>-->
</head>
<body>

<!--BEGIN OUT-->
<div class="out">

    <!--HEADER-->
    <header class='header js-header'>

        <div class="center">
            <div class="header__inner">
                <!--  mob-menu btn  -->
                <div class="mob-item">
                    <div class="burger-container js-burger">
                        <div id="burger">
                            <div class="bar topBar"></div>
                            <div class="bar btmBar"></div>
                        </div>
                    </div>

                </div>

                <div class="header__logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="<?php bloginfo('name'); ?>"/></a>
                </div>

                <div class="header__nav">
                    <div class="header-menu">
                        <?php
                        $nav_args = array(
                            'theme_location'	=> 'header-nav',
                            'container'			=> '',
                            'depth'				=> 1
                        );
                        wp_nav_menu( $nav_args );
                        ?>
                    </div>

                    <?php if (!is_page('order', 'preview')) : ?>
                        <div class="header__order">
                            <div data-crm-widget="loginTooltip" class="loginTooltip hidden-xs"></div>
<!--                            <a href="/order" class="btn btn_orange btn_rounded hidden_sm">order now</a>-->
                        </div>
                    <?php endif ?>


                </div>

                <div class="mob-item mob-item_order">
                    <a href="/order" class="mob-order">
                        <svg class="icon-svg icon-bag">
                            <use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-svg-inline.svg#bag"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </header>


