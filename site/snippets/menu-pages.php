<?php

// main menu items
$items = $pages->listed();

// only show the menu if items are available
if($items->isNotEmpty() ):

?>

<li role="none" title="Main Menu" class="c-side-nav__title">Menu &rarr;</li>

<?php foreach($items as $item): ?>
  <li <?php e($item->isActive(), 'class="c-side-nav__item active"') ?> class="c-side-nav__item"><a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
<?php endforeach ?>

<?php endif ?>


