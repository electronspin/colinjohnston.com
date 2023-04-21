<?php
$webp = $src->toWebp();
$variants = $src->toVariants()->filterBy('extension', '!=', 'webp');
$source = $src->toSource();
?>
<figure>

  <a<?=e($class, attr(['class' => $class], ' '))?><?=e($link, attr(['href' => $webp->url()], ' '))?>>

    <picture>

      <?php foreach ($sizes as $max): ?>
      <source media="(min-width: <?=$max?>px)" type="image/webp" srcset="<?=$webp->resize($max)->url()?>"
        alt="<?=$webp->alt()?>" />
      <?php endforeach?>

      <?php foreach ($variants as $variant): ?>
      <?php foreach ($sizes as $max): ?>
      <source media="(min-width: <?=$max?>px)" type="image/<?=$variant->extension()?>"
        srcset="<?=$variant->resize($max)->url()?>" alt="<?=$variant->alt()?>" />
      <?php endforeach?>
      <?php endforeach?>

      <img src="<?=$source->resize($width, $height)->url()?>" alt="<?=$source->alt()?>" />

    </picture>

    </a>
    <figcaption>
      <?=e($caption, ($caption))?>
    </figcaption>
</figure>