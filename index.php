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

include VIEWS . 'main/main.php';
require CONTROLLERS . 'mainController.php';

if ($_REQUEST) {
    if ($_REQUEST['first_name']) {
        if ($_REQUEST['last_name']) {
            mainController('addPatient', $_REQUEST);
        } else {
            mainController('updatePatient', $_REQUEST);
        }
    } else {
        $_REQUEST['id'] ?
        mainController(
            $_REQUEST['request'],
            $_REQUEST['id']
        ) :
        mainController(
            $_REQUEST['request']
        );
    }
}


if (!$_REQUEST) {
    header('location: index.php?request=getAllPatients&id=');
}
?>
</body>
</html>

