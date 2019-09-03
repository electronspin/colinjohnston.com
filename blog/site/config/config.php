<?php

return [
  'debug' => true,
  'url' => 'http://colinjohnston.local/blog'
  // 'routes' => [
  //   [
  //       'pattern' => '(:any)',
  //       'action'  => function($uid) {
  //           $page = page($uid);
  //           if(!$page) $page = page('blog/' . $uid);
  //           if(!$page) $page = site()->errorPage();
  //           return site()->visit($page);
  //       }
  //   ],
  //   [
  //       'pattern' => 'blog/(:any)',
  //       'action'  => function($uid) {
  //           go($uid);
  //       }
  //   ]
  // ]
];