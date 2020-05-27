<?php

session_start();

include_once '../adapters/DataBaseConect.php';
include_once '../controllers/UserDataAccesObject.php';
include_once '../models/User.php';

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}

