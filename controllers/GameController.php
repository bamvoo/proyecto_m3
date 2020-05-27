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



function generateEnemy()
{
    //obtener un enemigo aleatorio con fuerza dependiendo del piso

}

function generateObject()
{
    //

}

function useObject()
{

}

function simulateCombat()
{
    //generar daño

    //bajar vida pj y mob

}

function nextBattle()
{
    //cambiar enemigo

    //bajar nivel

}

function levelUp()
{
    //subir nivel

}

function rest()
{
    //guardar avance

}

function rechargeFromRest()
{
    //cargar avance
}


function generateTxt()
{

}