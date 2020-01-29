<?php $page = 'moovweb-dev-center' ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/www/config.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/www/includes/head_old.php') ?>
<title>
    <?php echo $mwdc ?> - Recent Projects : <?php include($_SERVER['DOCUMENT_ROOT'].'/www/includes/title.php') ?></title>
</head>

<body>
    <div id="pagetop">
    </div>
    <div class="o-wrapper o-wrapper-grid o-wrapper--no-header">
        
            <?php include($_SERVER['DOCUMENT_ROOT'].'/www/includes/sidebar.php') ?>
            <div id="content" class="o-content o-layout__grid-item c-project">
                <!-- <div id="loader"><img class="loading" src="/www/images/ajax-loader.gif"></div> -->

                        <div class="c-imagebox animate">
                            <a href="#" data-reveal-id="moovweb-dev-center-downloads">
              <img
                srcset="/www/images/moovweb-dev-center-downloads_small.jpg 400w,
                        /www/images/moovweb-dev-center-downloads_medium.jpg 800w,
                        /www/images/moovweb-dev-center-downloads_large.jpg 1200w,
                        /www/images/moovweb-dev-center-downloads_xlarge.jpg 1600w"
                sizes="(min-width: 48em) 66.6vw, 100vw"
                src="/www/images/moovweb-dev-center-downloads_small.jpg"
                alt="<?php echo $mwdc ?>">
            </a>
                        </div>
                        <h2 class="c-project__title animate"><?php echo $mwdc ?></h2>
                        <?php include('overview.php') ?>
                        <p>View the Developer Center at <a href="http://developer.moovweb.com/" name="" target="_blank">developer.moovweb.com</a></p>
                        <p></p>

                        </div>
                <!--end two column content area-->

                <?php include($_SERVER['DOCUMENT_ROOT'].'/www/includes/foot.php') ?>
                
        </div>
        <!--end main page wrapper-->

        

        <!-- project modals -->
        <?php include('modals.php') ?>

    </body>

    </html>