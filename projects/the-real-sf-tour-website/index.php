<?php $page = 'the-real-sf-tour-website' ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?>
<title>The Real SF Tour Website - Recent Projects : <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/title.php') ?></title>
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
                            <!-- <a href="http://rsft.electronspin.com/" name="" target="_blank"></a> -->

                                <img srcset="/images/therealsftour-home_small.jpg 400w,
                        /images/therealsftour-home_medium.jpg 800w,
                        /images/therealsftour-home_large.jpg 1200w" sizes="(min-width: 48em) 66.6vw, 100vw" src="/images/therealsftour-home_small.jpg" alt="" />
                        </div>
                        <h2>The Real SF Tour Website</h2>
                        <p><a href="http://rsft.electronspin.com/" name="" target="_blank">therealsftour.com</a></p>
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