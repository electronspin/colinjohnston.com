<?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?>
<title>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/title.php') ?>
</title>
</head>

<body>
    <div id="pagetop">
    </div>
    <div class="page-wrapper">
        <div id="page" class="row">
            <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidebar-home.php') ?>
            <div id="content" class="eight columns project-thumb-grid">
                <!-- Convert this to CSS Grid! It's 2018. -->
                <ul class="block-grid two-up mobile">

                    <li>
                        <a href="/projects/rollbar-account-dashboard">
                            <div class="imagebox">
                                <figure>
                                    <img srcset="images/rollbar-account-dashboard-cover_small.jpg 400w, images/rollbar-account-dashboard-cover_medium.jpg 800w, images/rollbar-account-dashboard-cover_large.jpg 1200w" sizes="(min-width: 48em) 33.3vw, 100vw" src="images/rollbar-account-dashboard-cover_small.jpg" alt="<?php echo $rbad; ?>">
                                    <figcaption>
                                        <?php echo $rbad; ?>
                                    </figcaption>
                                </figure>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="/projects/rollbar-marketing-website">
                            <div class="imagebox">
                                <figure>
                                    <img srcset="images/rollbar-marketing-website-cover_small.jpg 400w, images/rollbar-marketing-website-cover_medium.jpg 800w, images/rollbar-marketing-website-cover_large.jpg 1200w" sizes="(min-width: 48em) 33.3vw, 100vw" src="images/rollbar-marketing-website-cover_small.jpg" alt="<?php echo $rbws; ?>">
                                    <figcaption>
                                        <?php echo $rbws; ?>
                                    </figcaption>
                                </figure>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="/projects/rollbar-identity-refresh">
                            <div class="imagebox">
                                <figure>
                                    <img srcset="images/rollbar-identity-refresh-businesscards_small.jpg 400w, images/rollbar-identity-refresh-businesscards_medium.jpg 800w, images/rollbar-identity-refresh-businesscards_large.jpg 1200w" sizes="(min-width: 48em) 33.3vw, 100vw" src="images/rollbar-identity-refresh-businesscards_small.jpg" alt="<?php echo $rbid; ?>">
                                    <figcaption>
                                        <?php echo $rbid; ?>
                                    </figcaption>
                                </figure>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="/projects/solanolabs-ci-session-view">
                            <div class="imagebox">
                                <figure>
                                    <img srcset="images/solanolabs-sessionview-v2_small.jpg 400w,
images/solanolabs-sessionview-v2_medium.jpg 800w,
images/solanolabs-sessionview-v2_large.jpg 1200w" sizes="(min-width: 48em) 33.3vw, 100vw" src="images/solanolabs-sessionview-v2_small.jpg"
                                        alt="<?php echo $slcs; ?>">
                                    <figcaption>
                                        <?php echo $slcs; ?>
                                    </figcaption>
                                </figure>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/projects/paul-saffo-website">
                            <div class="imagebox">
                                <figure>
                                    <img srcset="images/saffo-home-responsive_small.jpg 400w,
images/saffo-home-responsive_medium.jpg 800w,
images/saffo-home-responsive_large.jpg 1200w" sizes="(min-width: 48em) 33.3vw, 100vw" src="images/saffo-home-responsive_small.jpg"
                                        alt="Paul Saffo Website">
                                    <figcaption>Paul Saffo Website</figcaption>
                                </figure>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="/projects/moovweb-dev-center">
                            <div class="imagebox">
                                <figure>
                                    <img srcset="images/moovweb-dev-center-downloads_small.jpg 400w,
images/moovweb-dev-center-downloads_medium.jpg 800w,
images/moovweb-dev-center-downloads_large.jpg 1200w" sizes="(min-width: 48em) 33.3vw, 100vw" src="images/moovweb-dev-center-downloads_small.jpg"
                                        alt="<?php echo $mwdc ?>">
                                    <figcaption>
                                        <?php echo $mwdc ?>
                                    </figcaption>
                                </figure>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/projects/moovweb-control-center">
                            <div class="imagebox">
                                <figure>
                                    <img srcset="images/moovweb-control-center-main_small.jpg 400w,
images/moovweb-control-center-main_medium.jpg 800w,
images/moovweb-control-center-main_large.jpg 1200w" sizes="(min-width: 48em) 33.3vw, 100vw" src="images/moovweb-control-center-main_small.jpg"
                                        alt="<?php echo $mwcc ?>">
                                    <figcaption>
                                        <?php echo $mwcc ?>
                                    </figcaption>
                                </figure>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!--end eight column content area-->
        </div>
        <!--end main row-->
    </div>
    <!--end page wrapper-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/foot.php') ?>
</body>

</html>