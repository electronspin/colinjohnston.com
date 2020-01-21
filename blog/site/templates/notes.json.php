<?php

$data = $pages->find('notes')->children()->published()->flip();
$json = [];

foreach($data as $note) {

  $json[] = [
    'url'   => (string)$note->url(),
    'title' => (string)$note->title(),
    'text'  => (string)$note->text(),
    'date'  => (string)$note->date()
  ];

}

echo json_encode($json);