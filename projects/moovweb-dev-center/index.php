<?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?> 

<title>Moovweb Developer Center | Recent Projects | Colin Johnston</title>
</head>

<body>
  
<div id="page" class="row">

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidebar.php') ?>
    
  <div id="content" class="eight columns">
      
    <div id="loader"><img class="loading" src="/images/ajax-loader.gif"></div>
     
      <div class="row">
        <div class="twelve columns">
          <div class="imagebox">
            <img
                srcset="/images/moovweb-dev-center-home_small.jpg 400w,
                        /images/moovweb-dev-center-home_medium.jpg 800w,
                        /images/moovweb-dev-center-home_large.jpg 1200w"
                sizes="(min-width: 48em) 66.6vw, 100vw"
                src="/images/moovweb-dev-center-home_small.jpg"
                alt="Moovweb Developer Center">
          </div>
          <h2>Moovweb Developer Center</h2>
          <p><a href="http://developer.moovweb.com/" name="" target="_blank">developer.moovweb.com</a></p>
          
          <?php //include('overview.php') ?>
          
          <p></p>
        </div>
        </div>
      </div>
      
  </div> <!--end eight column content area-->

</div> <!--end main row-->

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/foot.php') ?>
 
</body>
</html>
