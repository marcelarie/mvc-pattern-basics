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

    // 0 or false -> no edit
    // 1 or true -> edit
    $edit = $ids[1];
    
    // get patients by id
    $patients = getById($ids[0]);
    // get tests by id
    $tests = getTestsById($ids[0]);

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
    require_once VIEWS . 'patients/deletedPatients.php';
}

function updatePatient($data)
{
    $result = update($data);
    require_once VIEWS . 'patients/updatePatient.php';
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
