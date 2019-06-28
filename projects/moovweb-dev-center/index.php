<?php $page = 'moovweb-dev-center' ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?>
<title>
    <?php echo $mwdc ?> - Recent Projects : <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/title.php') ?></title>
</head>

<body>
    <div id="pagetop">
    </div>
    <div class="o-wrapper o-wrapper-grid">
        
            <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidebar.php') ?>
            <div id="content" class="o-content o-layout__grid-item">
                <!-- <div id="loader"><img class="loading" src="/images/ajax-loader.gif"></div> -->

                        <div class="imagebox animate">
                            <a href="#" data-reveal-id="moovweb-dev-center-downloads">
              <img
                srcset="/images/moovweb-dev-center-downloads_small.jpg 400w,
                        /images/moovweb-dev-center-downloads_medium.jpg 800w,
                        /images/moovweb-dev-center-downloads_large.jpg 1200w,
                        /images/moovweb-dev-center-downloads_xlarge.jpg 1600w"
                sizes="(min-width: 48em) 66.6vw, 100vw"
                src="/images/moovweb-dev-center-downloads_small.jpg"
                alt="<?php echo $mwdc ?>">
            </a>
                        </div>
                        <h2 class="animate"><?php echo $mwdc ?></h2>
                        <?php include('overview.php') ?>
                        <p>View the Developer Center at <a href="http://developer.moovweb.com/" name="" target="_blank">developer.moovweb.com</a></p>
                        <p></p>

            </div>

            <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/foot.php') ?>
    </div>
    <!--end page wrapper-->
    <!-- overview-modals -->
    <?php include('modals.php') ?>
</body>

</html>