<?php require_once 'connect.php' ?>

<?php
$id = $_POST['id'];
$title = $_POST['title'];
$calendar = $_POST['calendar'];
$country = $_POST['country'];
$Ccord = $_POST['Ccord'];
$Dcord = $_POST['Dcord'];

mysqli_query($connect ,"UPDATE `cards` SET `title` = '$title', `calendar` = '$calendar', `country` = '$country', `Ccord` = '$Ccord', `Dcord` = '$Dcord' WHERE `cards`.`id` = '$id';");

header('Location: /index.php');