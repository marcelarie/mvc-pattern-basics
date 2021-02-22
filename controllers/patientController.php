<?php

require_once MODELS . "patientModel.php";

function getAllPatients()
{
    $patients = get();
    require_once VIEWS. 'patients/patientsDashboard.php';
}

function getPatient($id)
{
    $patients = getById($id);
    foreach ($patients as $patient) {
        require_once VIEWS . 'patients/patient.php';
    }
}

function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}
