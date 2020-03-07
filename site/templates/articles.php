<?php snippet('head') ?>

    <div id="pagetop"></div>
    <div class="o-wrapper o-wrapper-grid o-wrapper--no-header">

    <?php snippet('sidebar') ?>

    <main id="content" class="o-content o-layout__grid-item c-page">

    <h1 class="c-page__title"><?= $page->title() ?></h1>

    <?= $page->text()->kirbytext() ?>

    <?php foreach($page->children()->listed()->flip() as $article): ?>

        <article>
            <h2><?= $article->title()->html() ?></h2>
            <p><?= $article->text()->excerpt(300) ?></p>
            <a href="<?= $article->url() ?>">Read more…</a>
        </article>

    <?php endforeach ?>

    <!-- <?php snippet('menu-main') ?> -->

    </main>

    <?php snippet('footer') ?>

    </div>

