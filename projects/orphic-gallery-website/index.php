<?php $page = 'orphic-gallery-website' ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?>
<title>Orphic Gallery Website : <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/title.php') ?></title>
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
                        <div class="imagebox">
                            <img
                srcset="/images/orphic-gallery_small.jpg 400w,
                        /images/orphic-gallery_medium.jpg 800w,
                        /images/orphic-gallery_large.jpg 1200w,
                        /images/orphic-gallery_xlarge.jpg 1600w"
                sizes="(min-width: 48em) 66.6vw, 100vw"
                src="/images/orphic-gallery_medium.jpg"
                alt="Paul Saffo Website">

                <!-- <a href="http://orphic.electronspin.com" name="" target="_blank"> --></a>
                        </div>
                        <h2>Orphic Gallery Website</h2>
                        <?php include('overview.php') ?>
                        <p></p>
                    </div>
                </div>
            </div>
            <!--end eight column content area-->
        </div>
        <!--end main row-->
    </div>
    <!--end page wrapper-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/foot.php') ?>
</body>

</html>