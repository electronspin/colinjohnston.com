<?php snippet('head') ?>

    <div id="pagetop"></div>
    <div class="o-wrapper o-wrapper-grid o-wrapper--no-header">

    <?php snippet('sidebar') ?>

    <main id="content" class="o-content o-layout__grid-item c-page">

    <header>
    <?php if ($image = $page->images()->findBy('template', 'cover')): ?> 
      <figure class="c-imagebox c-imagebox--hero animate">
      <img src="<?= $image->url() ?>" srcset="<?= $image->srcset([800, 1024, 2048]) ?>" />
      </figure>
    <?php endif ?>
    </header>

    <div class="c-page__body">

    <h1 class="c-page__title"><?= $page->title() ?></h1>

    <p class="c-page__date"><?= $page->published()->toDate('j F Y') ?></p>

    <?= $page->text()->kirbytext() ?>

    </div>

    </main>

    <?php snippet('footer') ?>

    </div>

