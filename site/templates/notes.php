<?php snippet('head') ?>

    <div id="pagetop"></div>
    <div class="o-wrapper o-wrapper-grid o-wrapper--no-header">

    <?php snippet('sidebar') ?>

    <main id="content" class="o-content o-layout__grid-item">

    <h1><?= $page->title() ?></h1>

    <?= $page->text()->kirbytext() ?>

    <?php foreach($page->children()->listed()->flip() as $note): ?>

      <article>
          <h2><?= $note->title()->html() ?></h2>
          <p><?= $note->text()->excerpt(100) ?></p>
          <a href="<?= $note->url() ?>">Read more…</a>
      </article>

    <?php endforeach ?>

    <?php snippet('menu-main') ?>

    </main>

    <?php snippet('footer') ?>

    </div>
