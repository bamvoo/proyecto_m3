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
    $query = "SELECT name, level, hp, weakness, resistance, attack FROM mobs";
    $ok = $db->executeQuery($query);
    if ($ok) {
        $datauser3 = [];
        $db->executeQuery($query, $datauser3);
        $num_mobs = generateRandomMob();
        $_SESSION['mobname'] = $datauser3[$num_mobs]['name'];
        $_SESSION['moblevel'] = $datauser3[$num_mobs]['level'];
        $_SESSION['mobhp'] = $datauser3[$num_mobs]['hp'];
        $_SESSION['mobwkn'] = $datauser3[$num_mobs]['weakness'];
        $_SESSION['mobrst'] = $datauser3[$num_mobs]['resistance'];
        $_SESSION['mobatk'] = $datauser3[$num_mobs]['attack'];
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
    return rand(1,$num_mobs);

}

function generateObject()
{
    $db = DataBaseConect::getConnection();
    $query = "SELECT name, effect, num FROM objects";
    $datauser = [];
    $ok = $db->executeQuery($query, $datauser);
    $num_obj = rand(1,sizeof($datauser));
    $_SESSION['obj_effect'] = $datauser[$num_obj]['effect'];
    $_SESSION['obj_num'] = $datauser[$num_obj]['num'];

    return $datauser[$num_obj]['name'];
}

function useObject()
{
    //
}

function simulateCombat()
{
    //generar daño

    //bajar vida pj y mob

    //bajar más dependiendo de ventaja o desventaja

    //si la vida del pj llega a cero mostrar FIN y eliminar pj de tabla

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