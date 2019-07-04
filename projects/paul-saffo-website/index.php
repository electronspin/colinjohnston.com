<?php $page = 'paul-saffo-website' ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?> 

<title>Paul Saffo Website - Recent Projects : <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/title.php') ?></title>

</head>

<body>
    <div id="pagetop">
    </div>
  <div class="o-wrapper o-wrapper-grid o-wrapper--no-header">
    


<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidebar.php') ?>
    
  <div id="content" class="o-content o-layout__grid-item c-project">
      
    <!-- <div id="loader"><img class="loading" src="/images/ajax-loader.gif"></div> -->
     

          <div class="c-imagebox animate">
            <a href="#" data-reveal-id="saffo-home-responsive">
              <img
                srcset="/images/saffo-home-responsive_small.jpg 400w,
                        /images/saffo-home-responsive_medium.jpg 800w,
                        /images/saffo-home-responsive_large.jpg 1200w,
                        /images/saffo-home-responsive_xlarge.jpg 1600w"
                sizes="(min-width: 48em) 66.6vw, 100vw"
                src="/images/saffo-home-responsive_medium.jpg"
                alt="Paul Saffo Website">
            </a>
          </div>
          <h2 class="c-project__title animate">Paul Saffo Website</h2>
          <?php include('overview.php') ?>
          
          <p></p>

          </div>
                <!--end two column content area-->
                
        </div>
        <!--end main page wrapper-->

        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/foot.php') ?>

        <!-- project modals -->
        <?php include('modals.php') ?>

    </body>

    </html>