<?php
require_once('database/connection.php');
require_once('database/news.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $db = getDatabaseConnection();
    $article = getNewsById($db, $id);

    if($article) {
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Article</title>
        </head>
        <body>
            <h1>Edit Article</h1>
            <form action="action_edit_news.php" method="post">
                <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
                <label for="title">Title:</label><br>
                <input type="text" id="title" name="title" value="<?php echo $article['title']; ?>"><br><br>
                <label for="introduction">Introduction:</label><br>
                <textarea id="introduction" name="introduction"><?php echo $article['introduction']; ?></textarea><br><br>
                <label for="fulltext">Full Text:</label><br>
                <textarea id="fulltext" name="fulltext"><?php echo $article['fulltext']; ?></textarea><br><br>
                <input type="submit" value="Submit">
            </form>
        </body>
        </html>
<?php
    } else {
        echo "Article not found.";
    }
} else {
    echo "ID parameter is missing.";
}
?>
