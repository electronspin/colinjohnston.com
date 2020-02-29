<?php

return [
  'debug' => true,
  'url' => 'http://colinjohnston.local',
  //'url' => 'http://localhost:3000',
  'markdown' => [
    'extra' => true
  ],
  'thumbs' => [
    'srcsets' => [
      'default' => [300, 800, 1024],
      'cover' => [800, 1024, 2048]
     ]
  ],
  // 'hooks' => [
  //   'kirbytags:before' => function ($text, $data, $options) {
  //       return str_replace('(image:', '(lazysrcset:', $text);
  //   }
  // ]
];