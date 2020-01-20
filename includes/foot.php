<?php $dir = ($_SERVER['DOCUMENT_ROOT'].'/'); ?>
  <footer class="o-footer o-layout__grid-item">
    <?php 
    $parentdir = dirname($_SERVER['PHP_SELF']);
    if ($parentdir == '/connect-and-collaborate') {
      echo null;
    } else {
      echo '<p class="contact-button show-for-small"><a class="contact-email" href="/connect-and-collaborate">Contact</a></p>';
  } ?>
    <div class="c-footer">
      <p class="c-footer__body">I built this website by hand with PHP, Sass, jQuery, and Gulp in
        Visual Studio Code and iTerm 2. Journal &amp; Notes powered by <a href="https://getkirby.com/">Kirby</a>. Typeface is <a href="https://rsms.me/inter/" title="Inter">Inter</a> by Rasmus
        Andersson. Hosting by MediaTemple. 
        <!-- A <a href="http://johnston.design" title="Johnston Design">Johnston Design</a>
        production.  -->
        <br />&copy; 2012&ndash;<?php echo date("Y"); ?> Colin Johnston. Updated
        <?php echo date ('F d Y', filemtime($dir));  ?>
      </p>
  </footer>
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