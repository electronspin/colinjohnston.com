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
      <img src="<?= $image->url() ?>" srcset="<?= $image->srcset('cover') ?>" />
      </a>
      </figure>
      <?php endif ?>
    </header>

    <div class="c-project__body"> <!-- TODO change to article -->

    <h1 class="c-project__title animate"><?= $page->title() ?></h1>

    <?= $page->intro()->blocks()->html() ?>

    <ul class="o-tabs" data-tab="">
      <li class="o-tabs__tab-title active">
        <a href="#overview">Project Overview </a>
      </li>
      <li class="o-tabs__tab-title">
        <a href="#process">Process &amp; Artifacts </a>
      </li>
    </ul>


    <ul class="o-tabs__tab-content">
      <li class="active" id="overviewTab">
        <div class="overview-content">
        <?= $page->overview()->blocks() ?>
        </div>
      </li>
      <li class="" id="processTab">
        <div class="overview-content">
          <?= $page->process()->blocks() ?>
        </div>
      </li>
    </ul>
    
    </div> <!-- end project body -->

    </main>

    <?php snippet('footer') ?>

    </div>

