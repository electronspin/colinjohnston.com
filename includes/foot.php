<?php $dir = ($_SERVER['DOCUMENT_ROOT'].'/'); ?>

<div class="o-footer o-layout__grid-item">

  <?php 
    $parentdir = dirname($_SERVER['PHP_SELF']);
    if ($parentdir == '/connect-and-collaborate') {
      echo null;
    } else {
      echo '<p class="contact-button show-for-small"><a class="contact-email" href="/connect-and-collaborate">Contact</a></p>';
  } ?>

  <p class="copyright">I built this website by hand with PHP, Sass (with some Foundation), jQuery, and Gulp in iTerm2
    and Visual Studio Code. Typeface is <a href="https://rsms.me/inter/" title="Inter UI">Inter UI</a> by Rasmus
    Andersson. Hosting by MediaTemple. An <a href="http://electronspin.com" title="Electron Spin">Electron Spin</a>
    production. &copy; 2012&ndash;<?php echo date("Y"); ?> Colin Johnston. Updated
    <?php echo date ('F d Y', filemtime($dir));  ?>




    <!-- <script src="/javascripts/jquery.js"></script> -->
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
    <!-- <script src="/javascripts/foundation.min.js"></script>
    <script src="/javascripts/app.js"></script> -->
    <!-- <script src="/javascripts/jquery.foundation.tabs.js"></script> -->

    <!-- <script type="text/javascript">
      $(window).load(function() {
         $("#featured").orbit();
      });
    </script> -->

</div>