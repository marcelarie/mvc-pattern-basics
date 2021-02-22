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

function delete($id)
{
    $mysqli= new mysqli("localhost", "admin", "1234", "patients");
    $deleteById = 'DELETE FROM patients WHERE id_pat ='.$id;
    $resultObj = $mysqli->query($deleteById);

    $result = $mysqli -> affected_rows;
    return $result;
}

function update()
{
}

function getById($id)
{
    $mysqli = new mysqli("localhost", "admin", "1234", "patients");
    $selectById = 'SELECT * FROM patients where id_pat = '.$id;
    $resultObj = $mysqli->query($selectById);
    while ($row = $resultObj->fetch_object()) {
        $result[]=$row;
    }
    return $result;
}
