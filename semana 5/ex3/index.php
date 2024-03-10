<?php
  $db = new PDO('sqlite:news.db'); //$db representa a minha conexão à base de dados
  $stmt = $db->prepare('SELECT * FROM news');
  $stmt->execute();
  $articles = $stmt->fetchAll();

   foreach( $articles as $article) {
    echo '<h1>' . $article['title'] . '</h1>';
    echo '<p>' . $article['introduction'] . '</p>';
  }
?>