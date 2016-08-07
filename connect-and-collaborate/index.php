<?php include($_SERVER['DOCUMENT_ROOT'].'/config.php') ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php') ?> 

<title>Connect and Collaborate : <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/title.php') ?></title>

</head>

<body>
    <div id="pagetop">
    </div>
  <div class="page-wrapper">
  
<div id="page" class="row">

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidebar-connect.php') ?>
    
  <div id="content" class="eight columns">
      
    <!-- <div id="loader"><img class="loading" src="/images/ajax-loader.gif"></div> -->
     
      <div class="row">
        <div class="twelve columns">
          <div class="imagebox">
            <img src="/images/connect-colin-598.jpg">
          </div>
          <h2>Connect</h2>
          <p>Do you have a project you'd like to to start?<br />Let's connect and see how I can help.</p>
          <p>Phone: +1 415 816-2477<br />
          Email: <a id="contact"></a>
          <h3>Networking &amp; Social</h3>
          <p>LinkedIn: <a href="http://www.linkedin.com/in/colinleejohnston" target="_blank">colinleejohnston</a><br />
          Twitter: <a href="https://twitter.com/colinjohnston" target="_blank">@colinjohnston</a><br />
          Dribbble: <a href="https://dribbble.com/colinjohnston" target="_blank">colinjohnston</a></p>
        </div>
        </div>
      </div>
      
            </div> <!--end eight column content area-->
        </div> <!--end main row-->
    </div> <!--end page wrapper-->

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/foot.php') ?>

  <!--http://archive.plugins.jquery.com/project/RotationalStringObfuscator-->
  <script type="text/javascript">
    
        $(function() {
        $('#contact').attr('href', $.rotate('znvygb:pbyva@pbyvawbuafgba.pbz')).text(
            $.rotate('pbyva@pbyvawbuafgba.pbz'));
        });
        
  </script>

</body>

</html>
