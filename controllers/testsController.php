<?php
require_once HELPERS . "spaces-converter.php";
require_once MODELS . "patientModel.php";
require_once MODELS . "testsModel.php";

function getAllResult($param)
{
    $parameters = json_decode($param);
    $resultFilter = count($parameters) >= 1 ?  $parameters[0] : false;
    $countCondition = count($parameters) >= 1 ?  'results' : false;
    $type = count($parameters) > 1 ? $parameters[1] : $type = false;

    $tests = $resultFilter ? getByResult($resultFilter) : getAll();
    $testInfo = $type ? getTypeInfo($type) : $type;
    $request = "getAllResult";
    //getCountByCondition($countCondition, $resultFilter);
    require_once 'views/tests/tests.php';
}

function getAllType($param)
{
    $parameters = json_decode($param);
    $typeFilter = count($parameters) >= 1 ?  $parameters[0] : false;
    $type = count($parameters) > 1 ? $parameters[1] :  false;
    $tests = $typeFilter ? getByType($typeFilter) : getAll();
    $testInfo = $type ? getTypeInfo($type) : $type;
    $resultFilter = spacesConverter($typeFilter, '%20');
    $request = "getAllType";
    //getCountByCondition('test_type', $typeFilter);
    require_once 'views/tests/tests.php';
}

function getTestInfo($type)
{
    $info = getTypeInfo($type);
    require_once 'views/modal/modal.php';
}

/* function getCountByCondition($condition, $filter = false)
{
    $amount = countResult($condition, $filter);
    echo ($amount);
} */
