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
            <!-- Carousel -->
            <?php 
                    echo do_shortcode('[smartslider3 slider=2]');
                ?>
            <!-- CAROUSEL  Ends -->
            <form id="new-form-carous" class="form-inline">
                <div class="row">
                    <div class="center-cont">
                        <div class="col-lg-10 0 col-sm-10 col-xs-10" id="form-news-sect">
                            <div class="form-group hidden-xs">
                                <img src="../img/letter.png" alt="Newsletter" class="img-responsive">
                            </div>
                            <div class="form-group news-gr">
                                <label id="lbl-email" for="email-input" class="hidden-sm hidden-md hidden-xs">Chcesz otrzymywać od nas Newsletter?</label>
                                <label id="lbl-email-sm" for="email-input-xs" class="visible-sm visible-md hidden-xs">Newsletter?</label>
                                <input id="email-input" type="email" class="form-control hidden-xs" required>
                                <input id="email-input-xs" type="email" class="form-control visible-xs" required placeholder="Newsletter?">
                            </div>
                        </div>
                        <div class="col-lg-2  col-sm-2 col-xs-2" id="btn-sub-wrap">
                            <div class="form-group">
                                <button id="btn-subscribe" type="button" class="btn btn-primary">Zapisz się</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </section>
    <!-- Navigation and Header-section Ends-->
    <div class="clearfix"></div>