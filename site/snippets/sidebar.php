<?php include('www/config.php') ?>

<div class="o-sidebar o-layout__grid-item">

    <header>
        <div class="c-branding">

        <?php if ($page->isHomePage()): ?>
        <h1 class="c-page__site-title"><?= $site->title() ?></h1>
        <?php else: ?>
        <div class="c-page__site-title"><?= $site->title() ?></div>
        <?php endif ?>

        <a class="c-branding__logo animate" href="/"><img class="c-logo" src="/assets/colin-johnston-logo-2020.svg"
                alt="Colin Johnston"></a>
        <a href="#" class="open-panel"><span class="svg-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                    <path id="menu-icon" d="M0 119.5h128v-16H0v16zM0 72h128V56H0v16zm0-48h128V8H0v16z" />
                </svg>
            </span>Menu</a>
        </div>
        <div>
            <?php snippet('intro') ?>
        </div>
    </header>
    <nav>
        <a href="#" class="close-panel"><span class="svg-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                    <path id="close-icon"
                        d="M64 128c35.4 0 64-28.6 64-64S99.4 0 64 0 0 28.6 0 64s28.6 64 64 64zM40 99.5L28.5 88l24-24-24-24L40 28.5l24 24 24-24L99.5 40l-24 24 24 24L88 99.5l-24-24-24 24z" />
                </svg>
            </span></a>
        <ul class="c-side-nav">
            <?php snippet('menu-projects') ?>
            <?php snippet('menu-posts') ?>
            <?php snippet('menu-pages') ?>
        </ul>
    </nav>
    



    <!-- <p class="contact-button hide-for-small"><a class="contact-email" href="/connect-and-collaborate">Contact</a></p> -->

</div>
<!--end four columns sidebar-->