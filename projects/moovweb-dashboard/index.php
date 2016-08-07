<?php $page = 'moovweb-dashboard' ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?> 

<title><?php echo $mwsdk ?> | Recent Projects | Colin Johnston</title>
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
                srcset="/images/moovweb-sdk-dashboard_small.jpg 400w,
                        /images/moovweb-sdk-dashboard_medium.jpg 800w,
                        /images/moovweb-sdk-dashboard_large.jpg 1200w"
                sizes="(min-width: 48em) 66.6vw, 100vw"
                src="/images/moovweb-sdk-dashboard_small.jpg"
                alt="<?php echo $mwsdk ?>">
          </div>
          <h2><?php echo $mwsdk ?></h2>

          <?php //include('overview.php') ?>
          <p>The <?php echo $mwsdk ?> is a web app that runs locally on your computer and allows you to create and manage projects with the Moovweb SDK.</p>
          <p>To see an overview of the app and how it works, visit the docs page on the Moovweb Developer Center here: <a href="http://developer.moovweb.com/docs/local/start">http://developer.moovweb.com/docs/local/start</a>.</p>
          <p>Or to view the <?php echo $mwsdk ?> in action, go to <a href="http://developer.moovweb.com/downloads" name="" target="_blank">Moovweb SDK Downloads</a> and download the SDK installer. Follow the <a href="http://developer.moovweb.com/quickstart">Quick Start</a> to get up and running.</p>
          
          <p></p>
        </div>
        </div>
      </div>
      
  </div> <!--end eight column content area-->

</div> <!--end main row-->

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/foot.php') ?>
 
</body>
</html>
