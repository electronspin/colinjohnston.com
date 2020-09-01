<?php snippet('head') ?>

    <div id="pagetop"></div>
    <div class="o-wrapper o-wrapper-grid o-wrapper--no-header">

    <?php snippet('sidebar') ?>

    <main id="content" class="o-content o-layout__grid-item c-page">

    <!-- header image goes here -->

    <div class="c-page__body">

    <h1 class="c-page__title"><?= $page->title() ?></h1>

    <!-- <?= $page->text()->kirbytext() ?> -->

    <?php foreach($page->children()->listed()->flip() as $article): ?>

        <article>
            <p class="c-page__date"><?= $article->published()->toDate('j F Y') ?></p>
            <h2><a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a></h2>
            <p><?= $article->text()->excerpt(200) ?> <a href="<?= $article->url() ?>">read more</a></p>
            
        </article>

    <?php endforeach ?>

    </div>

    </main>

    <?php snippet('footer') ?>

    </div>

