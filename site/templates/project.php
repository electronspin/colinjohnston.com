<?php snippet('head') ?>

    <div id="pagetop"></div>
    <div class="o-wrapper o-wrapper-grid o-wrapper--no-header">

    <?php snippet('sidebar') ?>

    <main id="content" class="o-content o-layout__grid-item c-project">

    <?php if ($image = $page->images()->findBy('template', 'cover')): ?> 
      <figure class="c-imagebox c-imagebox--hero animate">
      <a href="<?= $image->url() ?>" class="hb-single">
        <img src="<?= $image->url() ?>" srcset="<?= $image->srcset([800, 1024, 2048]) ?>" alt="<?= $image->alt() ?>"/>
      </a>
      </figure>
    <?php endif ?>

    <article class="c-project__body"> 

    <h1 class="c-project__title"><?= $page->title() ?></h1>

    <?= $page->intro()->kirbytext() ?>
    <?= $page->overview()->kirbytext() ?>
    <?= $page->process()->kirbytext() ?>
    
    </article> 

    </main>

    <?php snippet('footer') ?>

    </div>