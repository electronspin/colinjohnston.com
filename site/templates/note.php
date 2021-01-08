<?php snippet('head') ?>

    <div id="pagetop"></div>
    <div class="o-wrapper o-wrapper-grid o-wrapper--no-header">

    <?php snippet('sidebar') ?>

    <main id="content" class="o-content o-layout__grid-item c-page">

    <h1 class="c-page__title"><?= $page->title() ?></h1>

    <p class="c-page__date"><?= $page->published()->toDate('j F Y') ?></p>

    <?= $page->text()->kirbytext() ?>

    </main>

    <?php snippet('footer') ?>

    </div>

