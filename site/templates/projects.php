<?php snippet('head') ?>

    <div id="pagetop"></div>
    <div class="o-wrapper o-wrapper-grid o-wrapper--no-header">

    <?php snippet('sidebar') ?>

    <main id="content" class="o-content o-layout__grid-item">

    <h1><?= $page->title() ?></h1>

    <?= $page->text()->kirbytext() ?>

   
    
    <?php 
    // sorting all listed projects by year field in desc order
    $projects = page('projects')->children()->listed()->sortBy('year', 'desc'); ?>

    <?php foreach($projects as $project): ?>

        <article>
            <h2><?= $project->title()->html() ?></h2>
            <p><?= $project->text()->excerpt(300) ?></p>
            <a href="<?= $project->url() ?>">Read more…</a>
        </article>

    <?php endforeach ?>

    <?php snippet('menu-main') ?>

    </main>

    <?php snippet('footer') ?>

    </div>

