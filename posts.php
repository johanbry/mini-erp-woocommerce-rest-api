<?php
if ($_GET['sync'] === 'true') {
    require __DIR__ . '/sync.php';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
    <title>Mini ERP</title>

</head>


<body onload="renderPosts();">
    <header>
        <h1>Mini ERP</h1>
        <ul>
            <li><a href="posts.php">Posts</a></li>
            <li><a href="produkter.php">Produkter</a></li>
            <li><a href="bestallningar.php">Beställningar</a></li>
            <li><a href="media.php">Media</a></li>
        </ul>
        <button><a href="?sync=true">Synka nu!</a></button>
    </header>

    <main>
        <h1>Posts</h1>

        <div id="content">

        </div>
    </main>

</body>

</html>