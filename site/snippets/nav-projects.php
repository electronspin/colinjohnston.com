<?php include('www/config.php') ?><!-- Recent projects -->

<li class="c-side-nav__title">Featured Projects</li>

<?php
// selective items
// TODO for extensibility, add 'featured' field to projects blueprint and query on that
$items = page('projects')->children()->listed()->find('rollbar-account-dashboard', 'solono-ci-session-view', 'paul-saffo-website');
if($items and $items->isNotEmpty()):
?>
    
<?php foreach($items as $item): ?>
<li <?php e($item->isOpen(), 'class="c-side-nav__item active"') ?> class="c-side-nav__item"><a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
<?php endforeach ?>

<?php endif ?>


<!-- More projects -->

<li class="show-for-small c-side-nav__title">&nbsp;</li>

<li class="c-side-nav__title">More Projects</li>

<li <?php echo ($page=='rollbar-marketing-website' ) ? "class='c-side-nav__item active'" : "class='c-side-nav__item'"; ?>>
    <a href="/www/projects/rollbar-marketing-website">
        <?php echo $rbws ?>
    </a>
</li>
<li <?php echo ($page=='rollbar-identity-refresh' ) ? "class='c-side-nav__item active'" : "class='c-side-nav__item'"; ?>>
    <a href="/www/projects/rollbar-identity-refresh">
        <?php echo $rbid ?>
    </a>
</li>

<li <?php echo ($page=='moovweb-dev-center' ) ? "class='c-side-nav__item active'" : "class='c-side-nav__item'"; ?>>
    <a href="/www/projects/moovweb-dev-center">
        <?php echo $mwdc ?>
    </a>
</li>
<li <?php echo ($page=='moovweb-control-center' ) ? "class='c-side-nav__item active'" : "class='c-side-nav__item'"; ?>>
    <a href="/www/projects/moovweb-control-center">
        <?php echo $mwcc ?>
    </a>
</li>

<li class="show-for-small c-side-nav__title">&nbsp;</li>

<li class="c-side-nav__item show-for-small">
    <a href="www/connect-and-collaborate">Contact</a>
</li>
<li class="c-side-nav__item show-for-small">
    <a href="/">Home</a>
</li>
