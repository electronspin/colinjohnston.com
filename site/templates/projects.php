<?php snippet('head') ?>

    <div id="pagetop"></div>
    <div class="o-wrapper o-wrapper-grid o-wrapper--no-header">

    <?php snippet('sidebar') ?>

    <main id="content" class="o-content o-layout__grid-item c-page">

    <div class="c-page__body">

    <h1 class="c-page__title"><?= $page->title() ?></h1>

    <?= $page->text()->kirbytext() ?>

   
    
    <?php 
    // sorting all listed projects by year field in desc order
    $projects = page('projects')->children()->listed()->sortBy('year', 'desc'); ?>

    <?php foreach($projects as $project): ?>

        <article>
            <h2><?= $project->title()->html() ?></h2>

            <?php if ($image = $project->images()->findBy('template', 'cover')): ?> 
            <figure class="c-imagebox animate">
            <a href="<?= $project->url() ?>">
            <img class="lazyload" src="<?= $image->url() ?>" srcset="<?= $image->srcset([800, 1024, 2048]) ?>" alt="<?= $image->alt() ?>"/>
            </a>
            </figure>
            <?php endif ?>

            <p><?= 
            // $project->text()->excerpt(300) 
            $project->intro()
            ?></p>

            <p><a href="<?= $project->url() ?>">View project &rarr;</a></p>
        </article>

    <?php endforeach ?>

    </div>

    </main>

    <?php snippet('footer') ?>

    </div>

