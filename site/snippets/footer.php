<?php $dir = ($_SERVER['DOCUMENT_ROOT'].'/'); ?>
  <div class="o-footer o-layout__grid-item">
    <?php 
    $parentdir = dirname($_SERVER['PHP_SELF']); ?>
    
    <?= $page->is('contact') ? '' : '<p class="contact-button show-for-small"><a class="contact-email" href="/contact">Contact</a></p>' ?>
    
    <div class="c-footer">
      <p class="c-footer__body">I built this website using Kirby, Sass, old-fashioned vanilla JavaScript, and Gulp in
        Visual Studio Code and iTerm 2 on a Mac. Typeface is <a href="https://rsms.me/inter/" title="Inter">Inter</a> by Rasmus
        Andersson. Hosting by MediaTemple, but not for long. 
        &copy; 2012&ndash;<?php echo date("Y"); ?> Colin Johnston. Updated
        <?php echo date ('F d Y', filemtime($dir));  ?>
      </p>
    </div>
</div>

</body>
</html>