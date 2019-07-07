<?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?>
<title>Connect and Collaborate :
    <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/title.php') ?>
</title>
</head>

<body>
    <div id="pagetop">
    </div>
    <div class="o-wrapper o-wrapper-grid o-wrapper--no-header">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidebar-connect.php') ?>
        <div id="content" class="o-content o-layout__grid-item c-page">
            <div class="c-imagebox">
                <figure>
                    <img srcset="/images/colin-connect-2018_400.jpg 400w,
                                              /images/colin-connect-2018_800.jpg 800w,
                                              /images/colin-connect-2018_1200.jpg 1200w,
                                              /images/colin-connect-2018_1600.jpg 1600w"
                        sizes="(min-width: 48em) 66.6vw, 100vw" src="/images/colin-connect-2018_400.jpg" alt="" />
                </figure>
            </div>
            <h2 class="c-page__title">Connect</h2>
            <div class="c-page__body">
                <p>Do you have a project you'd like to to start? Or an existing website you'd like to
                    update? Let's connect and see how I can help.</p>
                <p>Phone: +1 415 816-2477
                    <br /> Email:
                    <a id="contact"></a>
                    <p>LinkedIn: <a href="http://www.linkedin.com/in/colinleejohnston"
                            target="_blank">colinleejohnston</a>
                        <br /> Twitter: <a href="https://twitter.com/colinjohnston" target="_blank">@colinjohnston</a>
                        <br /> Dribbble: <a href="https://dribbble.com/colinjohnston" target="_blank">colinjohnston</a>
                    </p>
            </div>
        </div>
        <!--end two column content area-->

        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/foot.php') ?>

    </div>
    <!--end main page wrapper-->

    <!--http://archive.plugins.jquery.com/project/RotationalStringObfuscator-->
    <script type="text/javascript">
        // $(function() {
        //     $('#contact').attr('href', $.rotate('znvygb:pbyva@pbyvawbuafgba.pbz')).text(
        //         $.rotate('pbyva@pbyvawbuafgba.pbz'));
        // });
    </script>
</body>

</html>