<?php

function get()
{
    $mysqli= new mysqli("localhost", "admin", "1234", "patients");
    $selectAll = 'SELECT * FROM patients';
    $resultObj = $mysqli->query($selectAll);
    while ($row = $resultObj->fetch_object()) {
        $result[]=$row;
    }
    return $result;
}

function delete()
{
}

function update()
{
}

function getById($id)
{
}
