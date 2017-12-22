<?php wp_head(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <!-- .error-404 -->
        <div class="container text-center" id="page404-wrap">
            <div class="row">
                <div class="col-md-12">
                    <h2>404 Not Found</h2>
                    <p>Sorry, an error has occured, Requested page not found!</p>
                    <div class="error-actions">
                        <a class="btn btn-primary btn-lg" href="<?php echo get_option("siteurl"); ?>" id="btn-404">
                            <i class="fa fa-arrow-left" aria-hidden="true" style="padding-right:5px"></i>
                            Back Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
