<?php

return [
  'debug' => true,
  'bnomei.dotenv.dir' => function () {
    return realpath(kirby()->roots()->index() . '/../');
},
  // 'url' => 'http://colinjohnston.local',
  'markdown' => [
    'extra' => true
  ],
  'thumbs' => [
    'srcsets' => [
      'default' => [400, 800, 1200, 1600],
      'projects' => [800, 1200, 2000],
      'cover' => [800, 1024, 2048],
    ],
  ],
];