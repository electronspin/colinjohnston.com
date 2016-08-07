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
                            <a href="http://orphic.electronspin.com" name="" target="_blank"><img src="/images/orphic-exhibitions-598.png" alt="" /></a>
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