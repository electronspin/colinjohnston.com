<?php snippet('head') ?>

    <div id="pagetop"></div>
    <div class="o-wrapper o-wrapper-grid o-wrapper--no-header">

    <?php snippet('sidebar') ?>

    <main id="content" class="o-content o-layout__grid-item c-page">

    <h1 class="c-page__title"><?= $page->title() ?></h1>

    <?= $page->text()->kirbytext() ?>

    <?php foreach($page->children()->listed()->flip() as $note): ?>

      <article>
            <p class="c-page__date"><?= $note->published()->toDate('j F Y') ?></p>
            <h2><a href="<?= $note->url() ?>"><?= $note->title()->html() ?></a></h2>
            <p><?= $note->text()->excerpt(100) ?> <a href="<?= $note->url() ?>">read more</a></p>
      </article>

    <?php endforeach ?>



    </main>

    <?php snippet('footer') ?>

    </div>

