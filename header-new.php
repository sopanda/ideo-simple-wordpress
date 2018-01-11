<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body>
    <!-- Navigation and Header-section -->
    <section id="header-carousel-section">
        <h4 class="h4-hidden">Just for validator warning</h4>
        <div class="wrapper">
            <div class="side-menu">
                <span onclick="openNav()" class="glyphicon glyphicon-play" aria-hidden="true"></span>
                <span class="hidden-sm hidden-md hidden-xs" id="arrow-title-menu">menu</span>
            </div>

            <header>
                <a href="<?php echo home_url() ?>" style="display:block;">
                    <div id="logoCont-xs" class="visible-xs">
                        <?php the_custom_logo();?>
                    </div>
                </a>
                <div id="wrap-nav">
                    <nav class="navbar navbar-default text-center center-cont hidden-xs">
                        <div id="logoCont">
                            <?php the_custom_logo();?>
                        </div>
                        <?php wp_nav_menu( array('theme_location' => 'menu', 
                                                  'menu_class'=> 'nav navbar-nav hidden-xs', 
                                                  'container' => 'false') ); ?>
                    </nav>
                    <?php get_search_form(); ?>
                </div>

            </header>
            <!-- Navigation Ends -->
        </div>
    </section>
    <!-- Navigation and Header-section Ends-->
    <div class="clearfix"></div>