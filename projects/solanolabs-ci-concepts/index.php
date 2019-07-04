<? $page = 'solanolabs-ci-concepts' ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?>
<title>
    <?php echo $slcs ?> - Recent Projects : <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/title.php') ?></title>
</head>

<body>
    <div id="pagetop">
    </div>
    <div class="o-wrapper o-wrapper-grid o-wrapper--no-header">

        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidebar.php') ?>
        <div id="content" class="o-content o-layout__grid-item c-project">
            <!-- <div id="loader"><img class="loading" src="/images/ajax-loader.gif"></div> -->

            <div class="c-imagebox">
                <a href="#" data-reveal-id="solanolabs-ci-concept-main-passed">
                    <img srcset="/images/solanolabs-ci-concept-main-passed_small.jpg 400w,
                        /images/solanolabs-ci-concept-main-passed_medium.jpg 800w,
                        /images/solanolabs-ci-concept-main-passed_large.jpg 1200w"
                        sizes="(min-width: 48em) 66.6vw, 100vw"
                        src="/images/solanolabs-ci-concept-main-passed_small.jpg" alt="<?php echo $slcc ?>">
                </a>
            </div>
            <h2><?php echo $slcc ?></h2>
            <?php include('overview.php') ?>
            <!-- <p>To view the <?php echo $slcc ?> go to <a href="http://console.moovweb.com/downloads" name="" target="_blank">console.moovweb.com</a> and create a free account. You can view demo projects under the account 'Moovweb Demos' to see the interface live.</p> -->
            <p></p>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/foot.php') ?>
    </div>
    <!--end page wrapper-->
    <!-- overview-modals -->
    <?php include('modals.php') ?>

</body>

</html>