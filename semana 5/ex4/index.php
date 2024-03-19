<?php
  session_start();
  require_once('database/conection.php'); 
  require_once('database/news.php');       
  require_once('templates/common.php');    
  $db = getDatabaseConnection();      
  $articles = getNews($db);
  output_header();                           
  output_article_list($articles);            
  output_footer();                         
?>

