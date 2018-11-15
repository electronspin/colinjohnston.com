<? $page = 'solanolabs-ci-session-view' ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?>
    <title>
        <?php echo $slcs ?> - Recent Projects : <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/title.php') ?></title>
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
                                <a href="#" data-reveal-id="solanolabs-sessionview-v2">
              <img
                srcset="/images/solanolabs-sessionview-v2_small.jpg 400w,
                        /images/solanolabs-sessionview-v2_medium.jpg 800w,
                        /images/solanolabs-sessionview-v2_large.jpg 1200w,
                        /images/solanolabs-sessionview-v2_xlarge.jpg 1600w"
                sizes="(min-width: 48em) 66.6vw, 100vw"
                src="/images/solanolabs-sessionview-v2_medium.jpg"
                alt="<?php echo $slcs ?>">
            </a>
                            </div>
                            <h2 class="animate"><?php echo $slcs ?></h2>
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