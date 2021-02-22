<?php

function getAll()
{
    $mysqli= new mysqli("localhost", "admin", "1234", "patients");
    $selectAll = 'SELECT * FROM tests';
    $resultObj = $mysqli->query($selectAll);
    while ($row = $resultObj->fetch_object()) {
        $result[]=$row;
    }
    return $result;
}

/* function delete()
{
}

function update()
{
} */

function getByResult($resultType)
{
    $mysqli= new mysqli("localhost", "admin", "1234", "patients");
    $selectAll = 'SELECT * FROM tests WHERE results="'.$resultType.'"';
    $resultObj = $mysqli->query($selectAll);

    while ($row = $resultObj->fetch_object()) {
        $result[]=$row;
    }
    return $result;
}

function getByType($type)
{
    $mysqli= new mysqli("localhost", "admin", "1234", "patients");
    $selectAll = 'SELECT * FROM tests WHERE test_type="'.$type.'"';
    $resultObj = $mysqli->query($selectAll);
    while ($row = $resultObj->fetch_object()) {
        $result[]=$row;
    }
    return $result;
}

function getTypeInfo($type)
{
    $mysqli= new mysqli("localhost", "admin", "1234", "patients");
    $selectAll = 'SELECT * FROM tests_info WHERE test_type="'.$type.'"';
    $resultObj = $mysqli->query($selectAll);
    while ($row = $resultObj->fetch_object()) {
        $result[]=$row;
    }
    return $result;
}
