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
        'canonical' => $page->url(),
        'alternate' => [
          [
            'href' => site()->url() . '/feed',
            'title' => 'Latest articles', // I don't think this gets picked up anywhere
            'type' => 'application/rss+xml'
          ]
        ]
      ],
      'og' => [
        'title' => $page->isHomePage()
          ? $site->title()
          : $page->title(),
        'type' => 'website',
        // 'site_name' => $site->title(),
        'url' => $page->url(),
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
      ],
      'twitter' => [
        'card' => 'summary',
        'site' => $site->twitter(),
        'title' => $page->isHomePage()
          ? $site->author()
          : $page->title(),
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
  'routes' => [
      [
          'pattern' => 'feed', // requires bnomei/kirby3-feed plugin
          'method' => 'GET',
          'action'  => function () {
              $options = [
                  'title'       => 'Colin Johnston\'s Journal',
                  'description' => 'Writing about design and technology since 2020',
                  'link'        => 'journal'
              ];
              $feed = page('journal')->children()->listed()->flip()->limit(10)->feed($options);
              return $feed;
          }
      ]
        ],
  'thumbs' => [
    'srcsets' => [
      'default' => [400, 800, 1200, 1600],
      'projects' => [800, 1200, 2000],
      'cover' => [800, 1024, 2048],
    ],
  ],
];