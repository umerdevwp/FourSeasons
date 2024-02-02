<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Four_Seasons
 * @since 1.0.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no, user-scalable=no">

    <link rel="profile" href="https://gmpg.org/xfn/11"/>
    <!-- Place favicon.ico in the root directory -->
    <link href="<?php echo get_field( "site_favicon", "option" ); ?>" type="img/x-icon" rel="shortcut icon">

    <!-- Font files are included here. -->
    <link href="https://fonts.googleapis.com/css?family=Heebo:300,400,500,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
   
<script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=4jxiwkrgrx6d5i9tla6y2w" async="true"></script>

</head>

<body <?php body_class(); ?> class="preload">

<!--<div class="preload__wrap"></div>-->

<div class="site__wrapper">

    <header class="site__header-wrap">

        <div class="site__header-primary">

            <div class="header_container">

                <nav class="navbar navbar-expand-lg">

                    <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo get_field( "site_logo", "option" ); ?>" alt="">
                    </a><!--/.navbar-brand-->

                    <a  href="#mmenu" class="navbar-toggler" ><i class="fas fa-bars"></i></a><!-- data-toggle="collapse" data-target="#mainNav" aria-expanded="false" -->

                    <ul class="pryhead__top-links">
                        <li><a href="<?php echo get_home_url(); ?>/contact-us">Contact Us</a></li>
                        <li><a href="<?php echo get_home_url(); ?>/free-estimate">Free Estimate</a></li>
                        <li class="pryHead__top-tel"><a href="tel:+<?php echo get_field( "phone_number", "option" ); ?>"><?php echo get_field( "phone_number", "option" ); ?></a></li>
                    </ul><!--/.pryhead__top-links-->

                    <!-- <div class="collapse navbar-collapse" id="mainNav">
 -->
                        <?php 
                        wp_nav_menu( array(
                            'menu' => 'Main Navigation',
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'mainNav',
                            'menu_class' => 'navbar-nav ml-auto',

                        ) );
                        ?>

                   <!--  </div> --><!--/.navbar-collapse-->
                 
                </nav><!--/.main Nav-->

            </div><!--/.header_container-->

        </div><!--/.site__header-primary-->

        <div id="sticky_nav" class="site__header-secondary">

            <div class="header_container">

                <div class="secondary__header-inner">

                    <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo get_field( "site_logo", "option" ); ?>" alt="">
                    </a><!--/.navbar-brand-->

                    <form class="site__header-form">
                        <h4><?php echo get_field( "header_discount_offer", "option" ); ?></h4>
                        <div class="row">

                            <div class="col">
                                <input type="text" class="form-control" placeholder="Name">
                            </div><!--/.col-->

                            <div class="col">
                                <input type="email" class="form-control" placeholder="Email">
                            </div><!--/.col-->

                            <div class="col">
                                <input type="tel" class="form-control" placeholder="Phone">
                            </div><!--/.col-->

                            <div class="col">
                                <input type="text" class="form-control" placeholder="ZIP">
                            </div><!--/.col-->

                            <div class="col">
                                <select class="form-control">
                                    <option>Product</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                    <option>Option 5</option>
                                </select>
                            </div><!--/.col-->

                        </div><!--/.row-->
                    </form><!--/.site__header-form-->

                    <div class="sec__header-right">
                        <a class="tel" href="tel:+<?php echo get_field( "phone_number", "option" ); ?>"><?php echo get_field( "phone_number", "option" ); ?></a>
                        <ul>
                            <li><button class="button">Free Estimate</button></li>
                            <li><a class="secondary__header-toggler" href="#mmenu"  fx="tornado"><i class="fas fa-bars"></i></a></li>
                        </ul>
                    </div><!--/.sec__header-right-->

                </div><!--/.secondary__header-inner-->

            </div><!--/.header_container-->

        </div><!--/.site__header-secondary-->

    </header><!--/.site__header-wrap-->


			
			<div id="mmenu">
                        <?php 
                        wp_nav_menu( array(
                            'menu' => 'Mobile & Toggle Menu',
                            'container'       => 'div',
                            'container_class' => 'mmenu-plugin',
                            'container_id'    => '',
                            'menu_class' => '',

                        ) );
                        ?>
			</div>