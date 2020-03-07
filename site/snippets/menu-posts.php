<?php

    // items from featured-posts collection
    // TODO create a sorting tag for better control of the order
    $items = $kirby->collection("featured-posts");
    // dump($items); die;
    
    // only show the menu if items are available
    if($items->isNotEmpty()): ?>

<li class="c-side-nav__title">Featured Posts</li>

        <?php foreach($items as $item): ?>
          <li <?php e($item->isOpen(), 'class="c-side-nav__item active"') ?> class="c-side-nav__item"><a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
        <?php endforeach ?>

    <?php endif ?>