<?php

function requestFilter()
{
    if ($_REQUEST) {
        if (isset($_REQUEST['first_name'])) {
            if ($_REQUEST['last_name']) {
                mainController('addPatient', $_REQUEST);
            } else {
                mainController('updatePatient', $_REQUEST);
            }
        } else {
            $_REQUEST['id'] ?
        mainController(
            $_REQUEST['request'],
            $_REQUEST['id']
        ) :
        mainController(
            $_REQUEST['request']
        );
        }
    }
    if (!$_REQUEST) {
        header('location: index.php?request=getAllPatients&id=');
    }
}
