<?php

require 'kirby/bootstrap.php';

// TODO clean this up

$kirby = new Kirby([
  'urls' => [
      'journal' => 'http://' . $_SERVER['HTTP_HOST'] . '/journal/',
      'notes' => 'http://' . $_SERVER['HTTP_HOST'] . '/notes/',
  ],
]);

echo $kirby->render();


// Original

// require 'kirby/bootstrap.php';
// echo (new Kirby)->render();
