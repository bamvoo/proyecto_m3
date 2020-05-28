<?php
declare(strict_types=1);

session_start();

include_once '../controllers/UserDataAccesObject.php';
include_once '../models/User.php';
include_once '../adapters/DataBaseConect.php';



function console_log( $data )
{
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}



function generateMob()
{

    $db = DataBaseConect::getConnection();

    //obtener mobs
    $query = "SELECT name, level, hp, weakness, resistance, attack, power FROM mobs";
    $ok = $db->executeQuery($query);
    if ($ok) {
        $datauser3 = [];
        $db->executeQuery($query, $datauser3);
        $num_mobs = generateRandomMob();
        $_SESSION['mobname'] = $datauser3[$num_mobs]['name'];
        $_SESSION['moblevel'] = $datauser3[$num_mobs]['name'];
    }
    else{
        echo "no genera mob";
    }

}

function generateRandomMob()
{
    //obtener un enemigo aleatorio con fuerza dependiendo del piso
    $db = DataBaseConect::getConnection();
    $num_mobs_q = "SELECT COUNT(*) FROM mobs";
    $num_mobs = $db->executeQuery($num_mobs_q);
    //var_dump($num_mobs);
    return rand(0,$num_mobs);

}

function generateObject()
{
    //
}

function useObject()
{
    //
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