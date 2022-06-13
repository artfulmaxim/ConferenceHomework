<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="<?php require "vendor/link.php" ?>" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Conference</title>
</head>
<body>
    <?php require"blocks/header.php" ?>
    <main class="main">
        <section class="row">
            <?php require_once 'vendor/cardMaker.php'; ?>
        </section>
    </main>

    <?php require"blocks/footer.php" ?>

</body>
</html>

