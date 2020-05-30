<?php
declare(strict_types=1);

session_start();

include_once '../controllers/UserDataAccesObject.php';
include_once '../models/User.php';
include_once '../adapters/DataBaseConect.php';




function generateMob()
{

    $db = DataBaseConect::getConnection();

    //obtener mobs
    $query = "SELECT name, level, hp, weakness, resistance, attack FROM mobs";
    $ok = $db->executeQuery($query);
    if ($ok) {
        $datauser3 = [];
        $db->executeQuery($query, $datauser3);
        $num_mobs = rand(0,2);

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

function generateObject()
{
    $db = DataBaseConect::getConnection();
    $query = "SELECT name, effect, num FROM objects";
    $datauser = [];
    $ok = $db->executeQuery($query, $datauser);
    $num_obj = rand(0,3);
//    $_SESSION['obj_effect'] = $datauser[$num_obj]['effect'];
//    $_SESSION['obj_num'] = $datauser[$num_obj]['num'];

    $name_obj = $datauser[$num_obj]['name'];

    //añadir botón con el nombre del objeto en el id = bag_div
    //y hacer que llame a la function useObject
}

function useObject($name_obj)
{
    $db = DataBaseConect::getConnection();
    $effect_q = "SELECT effect FROM objects WHERE name =". $name_obj;
    $num_q = "SELECT num FROM objects WHERE name =". $name_obj;
    $effect_q = $db->executeQuery($effect_q);
    $num_q = $db->executeQuery($num_q);
    if($effect_q == "heal"){
        $_SESSION['userhp'] = $_SESSION['userhp'] + $num_q;
    }
    else{
        if($_SESSION['mobhp'] <= $num_q){
            nextBattle();
        }
        else{
            $_SESSION['mobhp'] = $_SESSION['mobhp'] - $num_q;
        }
    }
}

function simulateCombat()
{
    var_dump("hola");
    die;
    //generar daño
    if($_SESSION['userhp'] <= $_SESSION['mobatk']){
        //matar user / mostrar FIN
        $db = DataBaseConect::getConnection();
        $del_user = "DELETE FROM players WHERE name =". $_SESSION['username'];
//        var_dump($del_user);
//        die;
        $db->executeQuery($del_user);
        header('location: ../views/game.php');
    }
    if($_SESSION['mobhp'] <= $_SESSION['userpower']){
        //matar mob
        nextBattle();
        //obtener obj
        generateObject();
        //cada 3 plantas sube 1 nivel
    }
    else{
        $_SESSION['mobhp'] = $_SESSION['mobhp'] - $_SESSION['userpower'];
    }
    //bajar vida pj y mob

    //bajar más dependiendo de ventaja o desventaja

    //si la vida del pj llega a cero mostrar FIN y eliminar pj de tabla

}

function nextBattle()
{
    //cambiar enemigo

    //bajar nivel

}


function endGame()
{
    //delete de user
    //borrar sessions
    //mostrar pantalla de FIN
}

function generateTxt()
{

}

function overwrite()
{

}