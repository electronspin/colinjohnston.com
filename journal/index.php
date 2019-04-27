<?php

require 'vendor/autoload.php';

require 'app/includes/functions.php';

// Load config file
config('source', 'app/config.ini');

// The front page of the journal
// This will match the root url

get('/index', function () {

  $page = from($_GET, 'page');
  $page = $page ? (int)$page : 1;

  $posts = get_posts($page);

  if(empty($posts) || $page < 1) {
    // non-existing page
    not_found();
  }

  render('main', array(
    'page' => $page,
    'posts' => $posts,
    'has_pagination' => has_pagination($page)
  ));

});

// The post page

get('/:year/:month/:name',function($year, $month, $name) {

  $post = find_post($year, $month, $name);

  if(!$post) {
    not_found();
  }

  render('post', array(
    'title' => $post->$title .' - '. config('blog.title'),
    'p' => $post
  ));

});

// The JSON API

get('./api/json', function() {

    header('Content-type: application/json');

    // Show an RSS feed with the 30 latest posts
    echo generate_rss(get_posts(1, 30));

});

// Or no match

get('.*', function() {
  not_found();
});

// Serve it all up
dispatch();


?>