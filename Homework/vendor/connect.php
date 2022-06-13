<?php
$connect = mysqli_connect('localhost', 'root', 'root','homework');
if (!$connect) {
    die('Error connect to database');
}