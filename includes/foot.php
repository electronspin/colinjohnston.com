<?php $dir = ($_SERVER['DOCUMENT_ROOT'].'/'); ?>

<div id="pagebottom">
    <div>
      <div class="row">
        <div class="twelve columns">
        
        <?php 
        $parentdir = dirname($_SERVER['PHP_SELF']);
        if ($parentdir == '/connect-and-collaborate') {
          echo null;
        } else {
          echo '<p class="contact-button show-for-small"><a class="contact-email" href="/connect-and-collaborate">Connect</a></p>';
        } ?>

        <p class="copyright">This website was built using PHP, Foundation, Sass, jQuery, and Gulp in iTerm2 and Sublime Text. Hosting by MediaTemple. <br>An <a href="http://electronspin.com" title="Electron Spin">Electron Spin</a> production. &copy; 2012&ndash;<?php echo date("Y"); ?> Colin Johnston. Updated <?php echo date ('F d Y', filemtime($dir));  ?>
        </div>
        <div class="three columns" style="text-align: right;">
        
        </div>
      </div>
    </div>
    
    <!-- <script src="/javascripts/jquery.js"></script> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="/javascripts/foundation.min.js"></script>
    <script src="/javascripts/app.js"></script>
    <!-- <script src="/javascripts/jquery.foundation.tabs.js"></script> -->
  
    <script type="text/javascript">
      $(window).load(function() {
         $("#featured").orbit();
      });
    </script>
    
</div>