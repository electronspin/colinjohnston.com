<?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?> 

<title>Orphic Gallery Website | Colin Johnston</title>
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
      
    <!-- <div id="loader"><img class="loading" src="/images/ajax-loader.gif"></div> -->
     
      <div class="row">
        <div class="twelve columns">
          <div class="imagebox">
            <a href="http://orphic.electronspin.com" name="" target="_blank"><img src="/images/orphic-exhibitions-598.png" alt="" /></a>
          </div>
          <h2>Orphic Gallery Website</h2>
          
          <?php include('overview.php') ?>
          
          <p></p>
        </div>
        </div>
      </div>
      
  </div> <!--end eight column content area-->

</div> <!--end main row-->

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/foot.php') ?>
 
</body>
</html>
