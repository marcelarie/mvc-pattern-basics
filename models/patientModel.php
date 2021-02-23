<?php

require './database/connect-database.php';

$mysqli = connectToDatabase();

function get()
{
    global $mysqli;
    $selectAll = 'SELECT * FROM patients';
    $resultObj = $mysqli->query($selectAll);
    while ($row = $resultObj->fetch_object()) {
        $result[]=$row;
    }
    return $result;
}

function add($data)
{
    global $mysqli;

    function addTicks($item)
    {
        return '"'.$item .'"';
    }

    $data = array_map('addTicks', $data);
    $commaSeparated = rtrim(implode(',', $data), ',');


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
    global $mysqli;

    $deleteById = 'DELETE FROM patients WHERE id_pat ='.$id;
    $resultObj = $mysqli->query($deleteById);

    $result = $mysqli -> affected_rows;
}

function update($data)
{
    global $mysqli;

    $data = json_decode(json_encode($data));
    $name = explode(' ', $data->first_name);
    $updatePatient = "UPDATE patients SET first_name = '{$name[0]}', last_name = '{$name[1]}', email = '{$data->email}', gender = '{$data->gender}', city = '{$data->city}', age = '{$data->age}' WHERE id_pat = {$data->id_pat}";

    $mysqli->query($updatePatient);

    $result = $mysqli -> affected_rows;
    return $result;
}

function getById($id)
{
    global $mysqli;

    $selectById = 'SELECT * FROM patients where id_pat = '.$id;
    $resultObj = $mysqli->query($selectById);
    while ($row = $resultObj->fetch_object()) {
        $result[]=$row;
    }
    return $result;
}

function getTestsById($patId)
{
    global $mysqli;

    $selectAll = 'SELECT * FROM tests WHERE id_pat="'.$patId.'"';
    $resultObj = $mysqli->query($selectAll);
    while ($row = $resultObj->fetch_object()) {
        $result[]=$row;
    }
    return $result;
}
