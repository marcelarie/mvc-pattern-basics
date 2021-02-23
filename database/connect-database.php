<?php

function connectToDatabase()
{
    return new mysqli("localhost", "admin", "1234", "patients");
}

$mysqli = connectToDatabase();
