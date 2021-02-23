<?php
include_once "config/constants.php";
require_once MODELS . "patientModel.php";

function getAllPatients()
{
    $patients = get();
    require_once VIEWS. 'patients/patientsDashboard.php';
}

function getPatient($idsString)
{
    $ids = json_decode($idsString);

    $edit = $ids[1];
    
    $patients = getById($ids[0]);
    $tests = getByPatId($ids[0]);
    foreach ($patients as $patient) {
        require_once VIEWS . 'patients/patient.php';
    }
}

function deletePatient($idsString)
{
    $ids = json_decode($idsString);
    $count = 0;
    
    foreach ($ids as $id) {
        if (delete($id)) {
            $count++;
        }
    }
    $count;
    // header('location: index.php?request=getAllPatients&id=');
    require_once VIEWS . 'patients/deletedPatients.php';
}

function addPatient($data)
{
    $result = add($data);
    require_once VIEWS . 'patients/addPatient.php';
}

function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}
