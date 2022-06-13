<?php require_once 'connect.php' ?>

<?php

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM cards WHERE `cards`.`id` = '$id'");

header('Location: /index.php');