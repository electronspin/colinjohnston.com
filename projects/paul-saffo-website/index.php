<?php $page = 'paul-saffo-website' ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?> 

<title>Paul Saffo Website | Recent Projects | Colin Johnston</title>

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
            <a href="#" data-reveal-id="saffo-home-responsive">
              <img
                srcset="/images/saffo-home-responsive_small.jpg 400w,
                        /images/saffo-home-responsive_medium.jpg 800w,
                        /images/saffo-home-responsive_large.jpg 1200w"
                sizes="(min-width: 48em) 66.6vw, 100vw"
                src="/images/saffo-home-responsive_medium.jpg"
                alt="Paul Saffo Website">
            </a>
          </div>
          <h2>Paul Saffo Website</h2>
          <!--<p><a href="http://www.saffo.com/" name="" target="_blank">www.saffo.com</a></p>-->
          
          <?php include('overview.php') ?>
          
          <p></p>
        </div>
        </div>
      </div>
      
            </div> <!--end eight column content area-->
        </div> <!--end main row-->
    </div> <!--end page wrapper-->

<!-- overview-modals -->
<?php include('modals.php') ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/foot.php') ?>

</body>

</html>
