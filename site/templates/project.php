<?php snippet('head') ?>

<div id="pagetop"></div>
<div class="o-wrapper o-wrapper-grid o-wrapper--no-header">

  <?php snippet('sidebar') ?>

  <main id="content" class="o-content o-layout__grid-item c-project">

    <?php //new block for cover iamge using kirby-webp plugin snippet ?>
    <?php if ($image = $page->images()->findBy('template', 'cover')): ?>
    <?php snippet('webp', ['sizes' => [2048, 1024, 800], 'src' => $image, 'class' => 'c-imagebox c-imagebox--hero', 'link' => $image->url(), 'linkclass' => 'hb-single', 'width' => $image->width(), 'height' => $image->height(), 'caption' => $image->caption()]) ?>
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