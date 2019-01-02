<?php
$name = 'howard';
$comment = '真感動';
?>

<?php echo $article['title'];
      echo $article['author']?>
<?php

foreach ($article['messages'] as $message) {
  echo $message['name'];
  echo $message['content'];
}
?>
