<?php 
  require_once('database/conection.php');
  function getDatabaseConnection() {
    $db = new PDO('sqlite:news.db');
    return $db;
}
?> 