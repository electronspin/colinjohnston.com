<?php snippet('head') ?>

    <div id="pagetop"></div>
    <div class="o-wrapper o-wrapper-grid o-wrapper--no-header">

    <?php snippet('sidebar') ?>

    <main id="content" class="o-content o-layout__grid-item">

    <?php
    // project covers grid from project-covers collection
    // TODO create a sorting tag for better control of the order
    $covers = $kirby->collection("project-covers"); ?>
    
    <ul class="c-gallery c-gallery--two-up">

    <?php foreach($covers as $cover): ?>
    <li class="c-gallery__item">
        <a href="<?= $cover->parent()->url() ?>">
            <div class="c-imagebox animate inview animated">
            <figure>
            <img src="<?= $cover->url() ?>" srcset="<?= $cover->srcset([320, 400, 640, 768, 1024, 1280, 1920]) ?>" sizes="(max-width: 25em) 25em, 30vw" alt="<?= $cover->alt() ?>"/>    
            <figcaption><?= $cover->parent()->title();?></figcaption>
            </figure>
            </div>
        </a></li>
    <?php endforeach ?>

    </ul>

    </main>

    <?php snippet('footer') ?>

    </div>
