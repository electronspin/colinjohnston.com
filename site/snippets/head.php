<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/favicon.ico" rel="icon" type="image/x-icon">
  <meta name="description" content="<?= $site->description() ?>">
  
  <?php if ($page->isHomePage()): ?>
  <title>Colin Johnston  - Product Design, Visual Design, UX Strategy, Brand Development - San Francisco Web Design</title>
  <?php else: ?>
  <title><?= $page->title() . ' – ' . $site->title() ?></title>
  <?php endif ?>

  <link rel="stylesheet" href="/assets/css/main.min.css" >
  <script src="/assets/js/modernizr.foundation.js"></script>
  <script src="/assets/js/picturefill.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script>
  <script src="/assets/js/app.min.js"></script>
</head>
<body>
