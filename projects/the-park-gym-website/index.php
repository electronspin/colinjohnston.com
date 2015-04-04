<?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?> 

<title>The Park Gym Website | Recent Projects | Colin Johnston</title>
</head>

<body>
    
  <div id="pagetop" class="row" >
    <div id="topbar" class="twelve columns">
      <p></p>
    </div>
  </div>
  
<div id="page" class="row">

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidebar.php') ?>
    
  <div id="content" class="eight columns">
      
    <div id="loader"><img class="loading" src="/images/ajax-loader.gif"></div>
     
      <div class="row">
        <div class="twelve columns">
          <div class="imagebox">
            <a href="http://www.theparkgym.com/" name="" target="_blank" <!--class="has-tip" title="Click to open The Park Gym website in a new tab"-->><img src="/images/the-park-gym-home-598.png" alt="" /></a>
          </div>
          <h2>The Park Gym Website</h2>
          <!--<p><a href="http://www.theparkgym.com/" name="" target="_blank">www.theparkgym.com</a></p>-->
          
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
