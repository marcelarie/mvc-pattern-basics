<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID MANAGER</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<?php
include_once "config/constants.php";

include 'views/main/main.php';
require './controllers/mainController.php';

if ($_REQUEST) {
    $_REQUEST['id'] ?
    mainController(
        $_REQUEST['request'],
        $_REQUEST['id']
    ) :
    mainController(
        $_REQUEST['request']
    );
}
    header('location: index.php?request=getAllPatients&id=');
?>
</body>
</html>

