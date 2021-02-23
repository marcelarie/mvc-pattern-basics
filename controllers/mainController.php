<?php
require 'patientController.php';
require 'testsController.php';

function mainController($request, $id = false)
{
    $id ? $request($id) : $request();
}
