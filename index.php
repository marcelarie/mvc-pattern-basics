<?php
include_once "config/constants.php";

include VIEWS . 'main/main.php';
require CONTROLLERS . 'mainController.php';
require CONTROLLERS . 'requestFilter.php';

requestFilter();
?>

