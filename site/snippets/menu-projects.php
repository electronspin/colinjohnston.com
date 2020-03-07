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


