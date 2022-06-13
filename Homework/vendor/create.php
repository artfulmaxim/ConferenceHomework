<?php require_once 'connect.php' ?>

<?php

$title = $_POST['title'];
$calendar = $_POST['calendar'];
$country = $_POST['country'];
$Ccord = $_POST['Ccord'];
$Dcord = $_POST['Dcord'];


mysqli_query($connect ,"INSERT INTO `cards`(`id`, `title`, `calendar`, `country`, `Ccord`, `Dcord`) VALUES (NULL,'$title','$calendar','$country','$Ccord','$Dcord')");

header('Location: /index.php');