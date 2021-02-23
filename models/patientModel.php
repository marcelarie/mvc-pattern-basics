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

function add($data)
{
    function addTicks($item)
    {
        return '"'.$item .'"';
    }

    $data = array_map('addTicks', $data);
    $commaSeparated = rtrim(implode(',', $data), ',');

    $mysqli= new mysqli("localhost", "admin", "1234", "patients");

    $add = " insert into patients 
    (first_name, last_name, email, gender, age, city)
    values ({$commaSeparated})";

    echo $add;
    $resultObj = $mysqli->query($add);

    $result = $mysqli -> affected_rows;

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

function getByPatId($patId)
{
    $mysqli= new mysqli("localhost", "admin", "1234", "patients");
    $selectAll = 'SELECT * FROM tests WHERE id_pat="'.$patId.'"';
    $resultObj = $mysqli->query($selectAll);
    while ($row = $resultObj->fetch_object()) {
        $result[]=$row;
    }
    return $result;
}
