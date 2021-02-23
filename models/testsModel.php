<?php

function getAll()
{
    global $mysqli;

    $selectAll = 'SELECT * FROM tests';

    $resultObj = $mysqli->query($selectAll);
    while ($row = $resultObj->fetch_object()) {
        $result[]=$row;
    }

    return $result;
}

function getByResult($resultType)
{
    global $mysqli;

    $selectAll = 'SELECT * FROM tests WHERE results="'.$resultType.'"';

    $resultObj = $mysqli->query($selectAll);
    while ($row = $resultObj->fetch_object()) {
        $result[]=$row;
    }

    return $result;
}

function getByType($type)
{
    global $mysqli;

    $selectAll = 'SELECT * FROM tests WHERE test_type="'.$type.'"';

    $resultObj = $mysqli->query($selectAll);
    while ($row = $resultObj->fetch_object()) {
        $result[]=$row;
    }

    return $result;
}

function getTypeInfo($type)
{
    global $mysqli;

    $selectAll = 'SELECT * FROM tests_info WHERE test_type="'.$type.'"';

    $resultObj = $mysqli->query($selectAll);
    while ($row = $resultObj->fetch_object()) {
        $result[]=$row;
    }

    return $result;
}
