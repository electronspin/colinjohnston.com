<?php snippet('head') ?>

    <div id="pagetop"></div>
    <div class="o-wrapper o-wrapper-grid o-wrapper--no-header">

    <?php snippet('sidebar-home') ?>

    <main id="content" class="o-content o-layout__grid-item">

    <?= $page->text()->kirbytext() ?>



    

    </main>

    <?php snippet('footer') ?>

    </div>
