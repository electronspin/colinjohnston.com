<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="/favicon.ico" rel="icon" type="image/x-icon">
  <?php if ($page->isHomePage()): ?>
  <title>Colin Johnston - Product Design, Visual Design, UX Strategy, Brand Development - San Francisco Web Design</title>
  <?php else: ?>
  <title><?= $page->title() . ' – ' . $site->title() ?></title>
  <?php endif ?>

  <?php echo $page->metaTags(['meta', 'link', 'og', 'twitter']) ?>

  <link rel="stylesheet" href="/assets/css/main.min.css" >
  <?= css('/assets/css/highlight/tomorrow-night.css') ?>
  <!--  ocean.css a11y-dark.css-->
  <script defer src="/assets/js/picturefill.min.js"></script>
  <script async src="/assets/js/highlight.pack.js"></script>
  <script defer src="/assets/js/halkaBox.min.js"></script>
  <script async src="/assets/js/app.min.js"></script>
  <?php snippet('fathom') ?>

</head>
<body>
