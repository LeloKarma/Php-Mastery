<?php

$looking = isset($_GET['title']) || isset($_GET['author']);
//passed author=HarperLee&title=To Kill a Mockingbird in the url
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
</head>
<body>
    <p>
        <?php if (isset($_COOKIE['username'])) {
            echo "You are " . $_COOKIE['username'];
         } else {
            echo " You are not authenticated.";
         
         } ?></p>
    <p>You lookin'? <?php echo (int)$looking; ?></p>
    <p>The book you are looking for is</p>
    <ul>
        <li><b>Title<b>: <?php echo $_GET['title']; ?></li>
        <li><b>Author<b>: <?php echo $_GET['author']; ?></li>
    </ul>
</body>
</html>

