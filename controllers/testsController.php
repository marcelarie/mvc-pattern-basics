<?php

require_once MODELS . "patientModel.php";
require_once MODELS . "testsModel.php";

//OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION

//Keep in mind that the function to be executed has to be one of the ones declared in this controller
// TODO Implement the logic


/* ~~~ CONTROLLER FUNCTIONS ~~~ */

function getAllResult($param)
{
    $parameters = json_decode($param);
    $resultFilter = count($parameters) >= 1 ?  $parameters[0] : false;
    $type = count($parameters) > 1 ? $parameters[1] : $type = false;

    $tests = $resultFilter ? getByResult($resultFilter) : getAll();
    $testInfo = $type ? getTypeInfo($type) : $type;
    $request = "getAllResult";
    require_once 'views/tests/tests.php';
}

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getAllType($param)
{
    $parameters = json_decode($param);
    $typeFilter = count($parameters) >= 1 ?  $parameters[0] : false;
    $type = count($parameters) > 1 ? $parameters[1] :  false;
    $tests = $typeFilter ? getByType($typeFilter) : getAll();
    $testInfo = $type ? getTypeInfo($type) : $type;
    $resultFilter = $typeFilter;
    $resultFilter = convert_url ($resultFilter);
    $request = "getAllType";
    require_once 'views/tests/tests.php';
}

function convert_url ($resultFilter) {
    if ($resultFilter === "PCR") {
        $resultFilter === "PCR";
    } else if ($resultFilter === "Test Antigeno") {
        $resultFilter = "Test%20Antigeno";
    } else {
        $resultFilter = "Test%20Anticuerpo";
    };

    return $resultFilter;
}
function getTestInfo($type)
{
    $info = getTypeInfo($type);
    require_once 'views/modal/modal.php';
}

