<?php $dir = ($_SERVER['DOCUMENT_ROOT'].'/'); ?>

<?php //var_dump($dir); ?>

<footer class="o-footer o-layout__grid-item">

  <?= $page->is('contact') ? '' : '<p class="contact-button show-for-small"><a class="contact-email" href="/contact">Contact</a></p>' ?>

  <div class="c-footer">
    <p class="c-footer__body">I built this website using <a href="https://getkirby.com/" target="_blank" rel="noopener"
        title="Kirby - The file-based content management system">Kirby</a>, <a href="https://sass-lang.com/"
        target="_blank" rel="noopener" title="Sass: Syntactically Awesome Style Sheets">Sass</a>, old-fashioned vanilla
      JavaScript, and Gulp in
      Visual Studio Code and iTerm 2 on a Mac. Typeface is <a href="https://rsms.me/inter/" target="_blank"
        rel="noopener" title="Inter">Inter</a> by Rasmus
      Andersson. Hosted on Dreamhost VPS. Kirby <?php echo $kirby->version(); ?></br>
      &copy; 2012&ndash;<?php echo date("Y"); ?> Colin Johnston.

      <?php //echo date ('F d Y', filemtime($dir));  ?>

    </p>
  </div>

</footer>

<script>
window.onload = function() {
  halkaBox.options({
    theme: "dark",
  });
  halkaBox.run("hb-single");
};
</script>

<script src="/assets/js/highlight.pack.js"></script>

<script>
hljs.highlightAll();
</script>

</body>

</html>