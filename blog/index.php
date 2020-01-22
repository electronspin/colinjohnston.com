<?php

require 'kirby/bootstrap.php';

// TODO clean this up

$kirby = new Kirby([
  'urls' => [
      // revert all custom url calls in tempaltes to clean this up
      'journal' => 'http://' . $_SERVER['HTTP_HOST'] . '/blog/journal/',
      'notes' => 'http://' . $_SERVER['HTTP_HOST'] . '/blog/notes/',
      // 'journal' => 'journal',
      // 'notes' => 'notes',
  ],
]);

echo $kirby->render();


// Original

// require 'kirby/bootstrap.php';
// echo (new Kirby)->render();
