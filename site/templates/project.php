<?php snippet('head') ?>

    <div id="pagetop"></div>
    <div class="o-wrapper o-wrapper-grid o-wrapper--no-header">

    <?php snippet('sidebar') ?>

    <main id="content" class="o-content o-layout__grid-item c-project">

    <header>
    <?php if ($image = $page->images()->findBy('template', 'cover')): ?> 
      <figure class="c-imagebox animate">
      <!-- TODO: set data in $page and retrieve for data-reveal-id -->
      <a href="#" <?= Html::attr('data-reveal-id', [$image->filename()]) ?> >
      <img src="<?= $image->url() ?>" srcset="<?= $image->srcset([800, 1024, 2048]) ?>" />
      </a>
        <figcaption>
          <div>
            <h1><?= $page->headline()->or($page->title()) ?></h1>
            <?php if($page->intro()->isNotEmpty()): ?>
            <div class="text">
              <?= $page->intro()->kt() ?>
            </div>
            <?php endif ?>
          </div>
        </figcaption>
      </figure>
      <?php endif ?>
    </header>

    <h1><?= $page->title() ?></h1>

    <?= $page->text()->kirbytext() ?>

    <?php snippet('menu-main') ?>

    </main>

    <?php snippet('footer') ?>

    </div>

