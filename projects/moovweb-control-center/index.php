<?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?> 

<title><?php echo $mwcc ?> | Recent Projects | Colin Johnston</title>
</head>

<body>
  
<div id="page" class="row">

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidebar.php') ?>
    
  <div id="content" class="eight columns">
      
    <!-- <div id="loader"><img class="loading" src="/images/ajax-loader.gif"></div> -->
     
      <div class="row">
        <div class="twelve columns">
          <div class="imagebox">
            <img
                srcset="/images/moovweb-control-center-main_small.jpg 400w,
                        /images/moovweb-control-center-main_medium.jpg 800w,
                        /images/moovweb-control-center-main_large.jpg 1200w"
                sizes="(min-width: 48em) 66.6vw, 100vw"
                src="/images/moovweb-control-center-main_small.jpg"
                alt="<?php echo $mwcc ?>">
          </div>
          <h2><?php echo $mwcc ?></h2>
          
          <?php include('overview.php') ?>

          <p>To view the <?php echo $mwcc ?> go to <a href="http://console.moovweb.com/downloads" name="" target="_blank">console.moovweb.com</a> and create a free account. You can view demo projects under the account 'Moovweb Demos' to see the interface live.</p>
          
          <p></p>
        </div>
        </div>
      </div>
      
  </div> <!--end eight column content area-->

</div> <!--end main row-->

<!-- overview-modals -->
<?php include('modals.php') ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/foot.php') ?>
 
</body>
</html>
