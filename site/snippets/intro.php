<!-- TODO hide intro on all mobile views except header_remove -->

<?php if ($page->isHomePage()): ?>
  <div class="c-intro">
<?php else: ?>
  <div class="c-intro hide-on-mobile">
<?php endif ?>
    <p>
      <?= $site->description() ?>
    </p>
  </div>
