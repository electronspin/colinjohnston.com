<?php $page = 'libsass-com' ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?>
<title>Libsass Website &amp; Logo | Recent Projects | Colin Johnston</title>
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
                            <img srcset="/images/libsass-com_small.jpg 400w,
                        /images/libsass-com_medium.jpg 800w,
                        /images/libsass-com_large.jpg 1200w" sizes="(min-width: 48em) 66.6vw, 100vw" src="/images/libsass-com_small.jpg" alt="Libsass.com Website homepage">
                        </div>
                        <h2>Libsass Website &amp; Logo</h2>
                        <p><a href="http://libsass.com/" name="" target="_blank">libsass.com</a></p>
                        <?php //include('overview.php') ?>
                        <p></p>
                    </div>
                </div>
            </div> <!--end eight column content area-->
        </div> <!--end main row-->
    </div> <!--end page wrapper-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/foot.php') ?>
</body>

</html>