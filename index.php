<!-- Header -->
<?php get_header(); ?>
<!-- Header Ends -->

<!-- Sidebar -->
<?php get_sidebar(); ?>
<!-- Sidebar Ends -->

<!-- Content Section -->
<main>

    <section id="branze-section">
        <div class="wrapper">
            <div class="center-cont">
                <div class="region-header text-center">
                    <h2>
                        <span id="branze-logo" class="title-sec">Branże</span>
                    </h2>
                </div>
            </div>
            <?php the_field('branze'); ?>
        </div>
    </section>

    <section id="produkty-section">
        <div class="wrapper">
            <div class="center-cont">
                <div class="region-header text-center">
                    <h2>
                        <span id="product-logo" class="title-sec">Produkty</span>
                    </h2>
                </div>
            </div>
            <?php the_field('produkty'); ?>
        </div>
    </section>

    <section id="uslugi-section">
        <div class="wrapper">
            <div class="center-cont">
                <div class="region-header text-center">
                    <h2>
                        <span id="uslugi-logo" class="title-sec">Usługi</span>
                    </h2>
                </div>
            </div>
            <?php the_field('uslugi'); ?>
        </div>
    </section>

    <section id="aktualnosci-section">
        <div class="wrapper">
            <div class="center-cont">
                <div class="region-header text-center">
                    <h2>
                        <span class="title-sec" id="aktualnosci-logo">Aktualności</span>
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-section">
        <div class="wrapper">
            <div class="center-cont">
                <div class="region-header text-center">
                    <h2>
                        <span class="title-sec" id="kontakt-logo">Kontakt</span>
                    </h2>
                </div>
            </div>
            <div class="center-cont">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 wrap-location col-xs-12 owl-carousel" id="contact-carousel">
                        <article class="location">
                            <h4 class="h4-hidden">Just for validator warning</h4>
                            <p>
                                SIMPLE S.A.
                                <br>
                                <br> ul. Bronisława Czecha 49/51
                                <br> 04-555 Warszawa
                                <br>
                                <br> tel.: (22) 812-58-98
                                <br> fax.: (22) 815-49-83
                                <br>
                                <br> simple@simple.com.pl
                            </p>
                        </article>
                        <article class="location">
                            <h4 class="h4-hidden">Just for validator warning</h4>
                            <p>
                                SIMPLE S.A.- Ośrodek Badawczo
                                <br> -Rozwojowy Lublin
                                <br>
                                <br> ul. Wolska 11A/4
                                <br> 20-411 Lublin
                                <br>
                                <br> tel. kom: +48 696 001 286
                                <br>
                                <br> lublin@simple.com.pl
                            </p>
                        </article>
                        <article class="location">
                            <h4 class="h4-hidden">Just for validator warning</h4>
                            <p>
                                SIMPLE S.A. - oddział Rzeszów
                                <br>
                                <br> ul. Rejtana 53A
                                <br> 35-326 Rzeszów
                                <br>
                                <br> tel. kom.: +48 696 001 235
                                <br> fax.: (17) 865 42 41
                                <br>
                                <br> rzeszow@simple.com.pl
                            </p>
                        </article>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="center-cont">
                <hr class="hr-region" id="loc-end">
            </div>

            <div class="center-cont">
                <div class="row" id="contact-pytania-row">
                    <div class=" col-lg-6 col-sm-4 col-xs-6">
                        <div class="form-contact">
                            <h4>ZADAJ PYTANIE</h4>
                            <p class="visible-sm visible-xs" id="sm-mail">simple@simple.com.pl</p>
                            <?php the_field('kontakt') ?>
                        </div>
                    </div>
                    <div class=" col-lg-2 hidden-sm hidden-md hidden-xs social-media text-center">
                        <h4>SOCIAL MEDIA</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="../img/facebook_kontakt.png" alt="Facebook">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="../img/twiter_kontakt.png" alt="Twitter">
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 0">
                            <div class="col-lg-12">
                                <img src="../img/googlePlus_kontakt.png" alt="Google Plus">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="../img/in_kontakt.png" alt="LinkedIn">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-4 col-xs-6 praca">
                        <h4>PRACA</h4>
                        <p id="praca-xs-p">
                            Zainteresowane osoby prosimy
                            <br class="hidden-sm hidden-md"> o przesłanie CV
                            <br class="hidden-sm hidden-md">wraz z listem
                            <br class="hidden-lg hidden-md">motywacyjnym na adres:
                            <br class="hidden-sm hidden-md hidden-xs">
                            <br class="hidden-sm hidden-md hidden-xs">
                            <br>praca@simple.com.pl
                            <br class="hidden-sm hidden-md">
                            <br class="hidden-sm hidden-md">
                            <br class="hidden-sm hidden-md">
                            <br class="hidden-sm hidden-md">
                            <br>
                            <a href="#" class="hidden-sm hidden-md hidden-xs">Zobacz nasze oferty...</a>
                        </p>
                    </div>
                    <div class=" col-lg-1 col-sm-4 hidden-md"></div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>

            <div class="center-cont hidden-sm hidden-md hidden-xs">
                <hr class="hr-region" id="before-comeback">
            </div>

            <div class="center-cont hidden-sm hidden-md hidden-xs">
                <div class="powrot text-center">
                    <a href="#">Powrót na górę strony</a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>

    <div class="clearfix"></div>


    <?php dynamic_sidebar( 'custom-side-bar' ); ?>
</main>
<!-- Content Ends -->

<!-- Footer -->
<?php get_footer(); ?>
<!-- Footer ends -->