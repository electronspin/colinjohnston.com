<? $page = 'rollbar-account-dashboard' ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?>
<title>
    <?php echo $rbad ?> - Recent Projects : <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/title.php') ?></title>
</head>

<body>
    <div id="pagetop">
    </div>
    <div class="o-wrapper o-wrapper-grid">

        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidebar.php') ?>
        <div id="content" class="o-content o-layout__grid-item">
            <!-- <div id="loader"><img class="loading" src="/images/ajax-loader.gif"></div> -->

            <div class="imagebox animate">
                <a href="#" data-reveal-id="rollbar-account-dashboard-cover">
                    <img srcset="/images/rollbar-account-dashboard-cover_small.jpg 400w,
                        /images/rollbar-account-dashboard-cover_medium.jpg 800w,
                        /images/rollbar-account-dashboard-cover_large.jpg 1200w,
                        /images/rollbar-account-dashboard-cover_xlarge.jpg 1600w"
                        sizes="(min-width: 48em) 66.6vw, 100vw" src="/images/rollbar-account-dashboard-cover_medium.jpg"
                        alt="<?php echo $rbad ?>">
                </a>
            </div>
            <h2 class="animate"><?php echo $rbad ?></h2>
            <?php include('overview.php') ?>
            <p></p>

        </div>

        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/foot.php') ?>
    </div>
    <!--end page wrapper-->
    <!-- overview-modals -->
    <?php include('modals.php') ?>

</body>

</html>