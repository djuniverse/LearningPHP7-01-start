<?php
$looking = isset($_GET['title']) || isset($_GET['author']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bookstore</title>
</head>
<body>
<p>You lookin'? <?php echo (int) $looking; ?></p>
<p>The book you are looking for is</p>
<ul>
    Understanding PHP Basics
    [ 50 ]
    <li><b>Title</b>: <?php echo $_GET['title']; ?></li>
    <li><b>Author</b>: <?php echo $_GET['author']; ?></li>
    <li><b>var_dump</b>: <?php echo var_dump($looking); ?></li>
</ul>
</body>
</html>