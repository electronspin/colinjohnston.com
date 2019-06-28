<? $page = 'moovweb-control-center' ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?>
    <title>
        <?php echo $mwcc ?> - Recent Projects : <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/title.php') ?></title>
    </head>

    <body>
        <div id="pagetop">
        </div>
        <div class="o-wrapper o-wrapper-grid">
            
                <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidebar.php') ?>
                <div id="content" class="o-content .o-layout__grid-item">
                    <!-- <div id="loader"><img class="loading" src="/images/ajax-loader.gif"></div> -->

                            <div class="imagebox animate">
                            <a href="#" data-reveal-id="moovweb-control-center-main">
                                <img srcset="/images/moovweb-control-center-main_small.jpg 400w,
                        /images/moovweb-control-center-main_medium.jpg 800w,
                        /images/moovweb-control-center-main_large.jpg 1200w,
                        /images/moovweb-control-center-main_xlarge.jpg 1600w" 
                        sizes="(min-width: 48em) 66.6vw, 100vw" 
                        src="/images/moovweb-control-center-main_small.jpg" alt="<?php echo $mwcc ?>">
                            </a>
                            </div>
                            <h2 class="animate"><?php echo $mwcc ?></h2>
                            <?php include('overview.php') ?>
                            <p>To view the
                                <?php echo $mwcc ?> go to <a href="http://console.moovweb.com/downloads" name="" target="_blank">console.moovweb.com</a> and create a free account. You can view demo projects under the account 'Moovweb Demos' to see the interface live.</p>
                            <p></p>

                </div>
                <!--end eight column content area-->

        </div>
        <!--end page wrapper-->
        <!-- overview-modals -->
        <?php include('modals.php') ?>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/foot.php') ?>
    </body>

    </html>