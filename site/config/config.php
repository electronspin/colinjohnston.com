<?php

return [
  'debug' => true,
  'bnomei.dotenv.dir' => function () {
    return realpath(kirby()->roots()->index() . '/../');
  },
  'pedroborges.meta-tags.default' => function ($page, $site) {
    return [
      // 'title' => $site->title(),
      'meta' => [
        'description' => $site->description()
      ],
      'link' => [
        'canonical' => $page->url()
      ],
      'og' => [
        'title' => $page->isHomePage()
          ? $site->title()
          : $page->title(),
        'type' => 'website',
        'site_name' => $site->title(),
        'url' => $page->url()
      ],
      'twitter' => [
        'card' => 'summary',
        'site' => $site->twitter(),
        'title' => $page->title(),
        'description' => $page->isHomePage()
          ? $site->description()
          : $page->text()->excerpt(128),
        'namespace:image' => function ($page) {
          if ($image = $page->images()->findBy('template', 'cover'))
            return [
              'image' => $image->url(),
              'alt' => $image->alt()
            ];
          else
            return [
              'image' => '',
              'alt' => ''
            ];
        }
      ]
    ];
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