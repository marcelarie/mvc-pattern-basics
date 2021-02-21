<?php
require 'patientController.php';
// require 'travelController.php';

function mainController($request, $id = false)
{
    $id ? $request($id) : $request();
}
