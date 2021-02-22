<?php

require_once MODELS . "patientModel.php";

//OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION

//Keep in mind that the function to be executed has to be one of the ones declared in this controller
// TODO Implement the logic


/* ~~~ CONTROLLER FUNCTIONS ~~~ */

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getAllPatients()
{
    $patients = get();
    require_once VIEWS. 'patients/patientsDashboard.php';
}

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getPatient($id)
{
    $patients = getById($id);
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

/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}
