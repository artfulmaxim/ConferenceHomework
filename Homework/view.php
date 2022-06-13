<?php require_once 'vendor/connect.php' ?>

<?php

$product_id = $_GET['id'];
$product = mysqli_query($connect,"SELECT * FROM `cards` WHERE `id` = '$product_id'");
$product = mysqli_fetch_assoc($product);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="<?php require "vendor/link.php" ?>" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>View</title>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARMCaHYkqdzR71mQiqerZ6L7rUlZguLgM"></script>

</head>
<body>
<?php require"blocks/header.php" ?>
    <div class="container">
        <h1><?= $product['title'] ?></h1>
        <h2>Country of conference: <?= $product['country'] ?></h2>
        <h2><?= $product['calendar'] ?></h2>
        <h3>Latitude <?= $product['Ccord'] ?></h3>
        <h3>Longitude <?= $product['Dcord'] ?></h3>
        <input type="hidden" id="cordX" value="<?=$product['Ccord'] ?>">
        <input type="hidden" id="cordY" value="<?=$product['Dcord'] ?>">
        <div id="map"></div>
        <button type="button" onclick="location.href = 'vendor/delete.php?id=<?= $product_id ?>'" class="btn btn btn-danger my-3">Delete</button>
    </div>

<?php require"blocks/footer.php" ?>
</body>
</html>

<script src="js/viewMap.js"></script>
