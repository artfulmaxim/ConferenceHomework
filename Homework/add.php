<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php require "vendor/link.php" ?>" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Conference</title>
    <link rel="stylesheet" href="css/datepicker.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
    <script src="js/datepicker.min.js"></script>
    <script src="js/i18n/datepicker.en.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARMCaHYkqdzR71mQiqerZ6L7rUlZguLgM"></script>


</head>
<body>

<?php require"blocks/header.php" ?>

<main>
    <div class="container">
        <h3 class="mb-3">Make new conference</h3>
        <h5>Add title</h5>
        <form action="vendor/create.php" method="post">
            <input required="required" maxlength="255" minlength="2" name="title" type="text" class="form-control mb-3" placeholder="Title" >
            <h5>Add date</h5>
            <input required onkeyup="this.value = this.value.replace (/[^0-9/]/, '')" type="text" id="calendar" name="calendar" placeholder="Date" class="form-control" data-position="bottom left" autocomplete="off">
            <div id = countryCity, class="mt-5">
                <select name="country" id="country" >Country</select>
            </div>
            <input required onkeyup="this.value = this.value.replace (/[^0-9.-]/, '')" id="cordX" name="Ccord" type="text" class="form-control my-3" placeholder="Latitude" >
            <input required onkeyup="this.value = this.value.replace (/[^0-9.-]/, '')" id="cordY" name="Dcord" type="text" class="form-control mb-3" placeholder="Longitude" >
            <button id="BTN" type="button" class="btn btn-primary my-4" > Show on map </button>
            <div id="map"></div>
            <a class="btn btn btn-danger mr-5 my-4 " onclick="location.href = '/index.php'" > Back </a>
            <button type="submit" class="btn btn-primary my-4" > Save </button>
        </form>
    </div>

</main>

<?php require"blocks/footer.php" ?>

</body>
</html>

<script src="js/addMap.js"></script>

<script src="js/countryPicker.js"></script>

<script src="js/summonDatepicker.js"></script>