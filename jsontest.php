<?php

$host = 'http://' . $_SERVER['HTTP_HOST'];

$url = $host . '/journal.json';

// $url = '/journal.json';

$data = file_get_contents($url);

$articles = json_decode($data);

foreach ($articles as $article) {
  echo $article->title . '<br>';
  echo $article->url . '<br>'; 
}

?>

<hr>

<ul>
<?php foreach ($articles as $article) : ?>
  <li><?php echo '<a href="' . $article->url . '">' . $article->title . '</a>'; ?></li>
<?php endforeach; ?>
</ul>


