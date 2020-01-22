<?php

return [
  'debug' => true,
  'url' => 'http://colinjohnston.local/blog/'
  // 'url' => 'http://colinjohnston.local'

  // I thought this would work with gulp-connect-php but it doesn't
  // Check out https://www.npmjs.com/package/gulp-mamp
  // 'url' => 'http://' . $_SERVER['HTTP_HOST']

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