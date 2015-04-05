<?php $dir = ($_SERVER['DOCUMENT_ROOT'].'/'); ?>

<div id="pagebottom">
    <div>
      <div class="row">
        <div class="nine columns">
        <p class="contact-button show-for-small"><a class="contact-email" href="/connect-and-collaborate">Connect</a></p>
        <p class="copyright">&copy; 2012-2015 Colin Johnston. Hand-coded in Sublime Text using Foundation / Sass / PHP / jQuery. An <a href="http://electronspin.com" title="Electron Spin">Electron Spin</a> production. Updated 
        <?php echo date ('F d Y', filemtime($dir));  ?>
        </div>
        <div class="three columns" style="text-align: right;">
        
        </div>
      </div>
    </div>
    
    <!-- <script src="/javascripts/jquery.js"></script> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="/javascripts/foundation.min.js"></script>
    <script src="/javascripts/app.js"></script>
  
    <script type="text/javascript">
   $(window).load(function() {
       $("#featured").orbit();
   });
    </script>
    
</div>