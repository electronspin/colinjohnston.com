<? $page = 'rollbar-identity-refresh' ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?>
    <title>
        <?php echo $rbid ?> - Recent Projects : <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/title.php') ?></title>
    </head>

    <body>
        <div id="pagetop">
        </div>
        <div class="page-wrapper">
            <div id="page" class="row">
                <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidebar.php') ?>
                <div id="content" class="eight columns">
                    <!-- <div id="loader"><img class="loading" src="/images/ajax-loader.gif"></div> -->
                    <div class="row">
                        <div class="twelve columns">
                            <div class="imagebox animate">
                                <a href="#" data-reveal-id="rollbar-identity-refresh-businesscards">
              <img
                srcset="/images/rollbar-identity-refresh-businesscards_small.jpg 400w,
                        /images/rollbar-identity-refresh-businesscards_medium.jpg 800w,
                        /images/rollbar-identity-refresh-businesscards_large.jpg 1200w,
                        /images/rollbar-identity-refresh-businesscards_xlarge.jpg 1600w"
                sizes="(min-width: 48em) 66.6vw, 100vw"
                src="/images/rollbar-identity-refresh-businesscards_medium.jpg"
                alt="<?php echo $rbid ?>">
            </a>
                            </div>
                            <h2 class="animate"><?php echo $rbid ?></h2>
                            <?php include('overview.php') ?>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end eight column content area-->
        </div>
        <!--end main row-->
        </div>
        <!--end page wrapper-->
        <!-- overview-modals -->
        <?php include('modals.php') ?>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/foot.php') ?>
    </body>

    </html>