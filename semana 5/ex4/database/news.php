<?php

function userExists($username, $password) {
    $db = getDatabaseConnection();
    $stmt = $db->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user !== false; 
}

function getNews(PDO $db) {
    $stmt = $db->prepare("SELECT * FROM news");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function updateNews(PDO $db, $id, $title, $introduction, $fulltext) {
    $stmt = $db->prepare("UPDATE news SET title = :title, introduction = :introduction, fulltext = :fulltext WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':introduction', $introduction);
    $stmt->bindParam(':fulltext', $fulltext);
    return $stmt->execute();
}

function getNewsById(PDO $db, $id) {
    $stmt = $db->prepare("SELECT * FROM news WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>