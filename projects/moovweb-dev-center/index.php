<?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?> 

<title>Moovweb Developer Center | Recent Projects | Colin Johnston</title>
</head>

<body>
    
  <!-- <div id="pagetop" class="row" >
    <div id="topbar" class="twelve columns">
      <p></p>
    </div>
  </div> -->
  
<div id="page" class="row">

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidebar.php') ?>
    
  <div id="content" class="eight columns">
      
    <div id="loader"><img class="loading" src="/images/ajax-loader.gif"></div>
     
      <div class="row">
        <div class="twelve columns">
          <div class="imagebox">
            <img 
            src="/images/moovweb-dev-center-home_lg.jpg" 
            srcset="/images/moovweb-dev-center-home_lg.jpg 1x, /images/moovweb-dev-center-home_lg@2x.jpg 2x"
            alt="Moovweb Developer Center" />
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
