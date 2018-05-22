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


</head>
<body>

<!--BEGIN OUT-->
<div class="out">

    <!--HEADER-->
    <header class='header js-header'>

        <div class="center">
            <div class="header__inner">

                <div class="header__logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>"/></a>
                </div>

                <div class="header__nav">
                    <div class="header-menu">
                        <div class="header-menu__inner">
                            <nav class="main-nav" id="nav">
                                <?php
                                $nav_args = array(
                                    'theme_location'	=> 'header-nav',
                                    'container'			=> '',
                                    'depth'				=> 1
                                );
                                wp_nav_menu( $nav_args );
                                ?>
                            </nav>
                        </div>
                    </div>

                    <?php if (!is_page('order', 'preview')) : ?>
                        <div class="header__order">
                            <div data-crm-widget="loginTooltip" class="loginTooltip hidden-xs"></div>
<!--                            <a href="/order" class="btn btn_orange btn_rounded hidden_sm">order now</a>-->
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </header>


