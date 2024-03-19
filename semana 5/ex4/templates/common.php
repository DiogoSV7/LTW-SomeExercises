<?php
function output_header() {
    ?>
    <!DOCTYPE html>
    <html lang="en-US">
    <head>
        <title>Super Legit News</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/layout.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/comments.css" rel="stylesheet">
        <link href="css/forms.css" rel="stylesheet">
    </head>
    <body>
    <header>
        <h1><a href="index.html">Super Legit News</a></h1>
        <h2><a href="index.html">Where fake news are born!</a></h2>
        <div id="signup">
            <a href="register.html">Register</a>
            <a href="login.html">Login</a>
        </div>
    </header>
    <nav id="menu">
        <!-- just for the hamburguer menu in responsive layout -->
        <input type="checkbox" id="hamburger">
        <label class="hamburger" for="hamburger"></label>
        <ul>
            <li><a href="index.html">Local</a></li>
            <li><a href="index.html">World</a></li>
            <li><a href="index.html">Politics</a></li>
            <li><a href="index.html">Sports</a></li>
            <li><a href="index.html">Science</a></li>
            <li><a href="index.html">Weather</a></li>
        </ul>
    </nav>
    <aside id="related">
        <article>
            <h1><a href="#">Duis arcu purus</a></h1>
            <p>Etiam mattis convallis orci eu malesuada. Donec odio ex, facilisis ac blandit vel, placerat ut lorem. Ut id sodales purus. Sed ut ex sit amet nisi ultricies malesuada. Phasellus magna diam, molestie nec quam a, suscipit finibus dui. Phasellus a.</p>
        </article>
        <article>
            <h1><a href="#">Sed efficitur interdum</a></h1>
            <p>Integer massa enim, porttitor vitae iaculis id, consequat a tellus. Aliquam sed nibh fringilla, pulvinar neque eu, varius erat. Nam id ornare nunc. Pellentesque varius ipsum vitae lacus ultricies, a dapibus turpis tristique. Sed vehicula tincidunt justo, vitae varius arcu.</p>
        </article>
        <article>
            <h1><a href="#">Vestibulum congue blandit</a></h1>
            <p>Proin lectus felis, fringilla nec magna ut, vestibulum volutpat elit. Suspendisse in quam sed tellus fringilla luctus quis non sem. Aenean varius molestie justo, nec tincidunt massa congue vel. Sed tincidunt interdum laoreet. Vivamus vel odio bibendum, tempus metus vel.</p>
        </article>
    </aside>
    <section id="news">
<?php
}

function output_footer() {
    ?>
    </section>
    <footer>
        <p>&copy; Fake News, 2022</p>
    </footer>
    </body>
    </html>
<?php
}
?>

<?php
function output_article_list($articles) {
    foreach ($articles as $article) {
        ?>
        <ul>
            <li><strong>Title:</strong> <?php echo $article['title']; ?></li><br>
            <li><strong>Article:</strong> <?php echo $article['fulltext']; ?></li><br>
            <li><strong>Introduction:</strong> <?php echo $article['introduction']; ?></li><br>
        </ul>
        <?php
    }
}
?>
<?php
function output_comment_list($comments) {
    foreach ($comments as $comment) {
        $date = date('F j', $comment['published']);
        ?>
        <ul>
            <li><strong>Name:</strong> <?php echo $comment['name']; ?></li><br>
            <li><strong>Comment:</strong> <?php echo $comment['text']; ?></li><br>
            <li><strong>Date:</strong> <?php echo $date; ?></li><br><br>
        </ul>
        <?php
    }
}
?>
