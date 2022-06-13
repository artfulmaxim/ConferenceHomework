<?php require_once 'connect.php' ?>
<?php
$products = mysqli_query($connect, "SELECT * FROM `cards`");
$products = mysqli_fetch_all($products);
foreach ($products as $product) {
    ?>
        <?php require "./blocks/card.php" ?>
<?php
    }
?>