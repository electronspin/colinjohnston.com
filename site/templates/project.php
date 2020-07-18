<?php snippet('head') ?>

    <div id="pagetop"></div>
    <div class="o-wrapper o-wrapper-grid o-wrapper--no-header">

    <?php snippet('sidebar') ?>

    <main id="content" class="o-content o-layout__grid-item c-project">

    <header>
    <?php if ($image = $page->images()->findBy('template', 'cover')): ?> 
      <figure class="c-imagebox c-imagebox--hero animate">
      <a href="<?= $image->url() ?>" class="hb-single">
        <img src="<?= $image->url() ?>" srcset="<?= $image->srcset([800, 1024, 2048]) ?>" />
      </a>
      </figure>
      <?php endif ?>
    </header>

    <div class="c-project__body"> <!-- TODO change to article -->

    <h1 class="c-project__title animate"><?= $page->title() ?></h1>

    <?= $page->intro()->kirbytext() ?>

    <?php if ($page->process()->isNotEmpty()): ?>
    <ul class="o-tabs" data-tab="">
      <li class="o-tabs__tab-title active">
        <a href="#overview">Project Overview </a>
      </li>
      <li class="o-tabs__tab-title">
        <a href="#process">Process &amp; Artifacts </a>
      </li>
    </ul>
    <?php else: ?>
      <p style="padding-bottom: 1em;">&mdash;</p>
    <?php endif ?>

    <?php if ($page->overview()->isNotEmpty() || $page->process()->isNotEmpty()): ?>
    <ul class="o-tabs__tab-content">
      <li class="active" id="overviewTab">
        <div class="overview-content">
          <?= $page->overview()->kirbytext() ?>
          <?php if ($page->process()->isNotEmpty()): ?>
          <div class="c-link-pagination">
              <a class="c-link-pagination--next" href="#process">See Process &amp; Artifacts</a>
          </div>
          <?php endif ?>
        </div>
      </li>
      <li class="" id="processTab">
        <div class="overview-content">
          <?= $page->process()->kirbytext() ?>
          <?php if ($page->overview()->isNotEmpty()): ?>
          <div class="c-link-pagination">
              <a class="c-link-pagination--prev" href="#overview">Read Project Overview</a>
          </div>
          <?php endif ?>
        </div>
      </li>
    </ul>
    <?php endif ?>
    
    </div> <!-- end project body -->

    </main>

    <?php snippet('footer') ?>

    </div>