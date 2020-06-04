<?php snippet('head') ?>

    <div id="pagetop"></div>
    <div class="o-wrapper o-wrapper-grid o-wrapper--no-header">

    <?php snippet('sidebar') ?>

    <main id="content" class="o-content o-layout__grid-item">

    <h1 class="c-page__title"><?= $page->title() ?></h1>

    <?= $page->text()->kirbytext() ?>

    <a href="<?= url('notes') ?>">Notes</a>
    <a href="<?= url('journal') ?>">Journal</a>

    </main>

    <?php snippet('footer') ?>

    </div>

