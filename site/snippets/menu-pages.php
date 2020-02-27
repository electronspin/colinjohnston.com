<?php

// main menu items
$items = $pages->listed();

// only show the menu if items are available
if($items->isNotEmpty()):

?>

<li class="c-side-nav__title">Main Menu</li>

<?php foreach($items as $item): ?>
  <li <?php e($item->isOpen(), 'class="c-side-nav__item active"') ?> class="c-side-nav__item"><a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
<?php endforeach ?>

<?php endif ?>


