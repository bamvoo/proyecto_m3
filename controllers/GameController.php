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
    $_SESSION['obj_effect'] = $datauser[$num_obj]['effect'];
    $_SESSION['obj_num'] = $datauser[$num_obj]['num'];

    $flag = false;
    $flag2 = false;
    if($_SESSION['obj_num_1'] == "vacio"){
        $_SESSION['obj_num_1'] = $datauser[$num_obj]['name'];
        $flag = true;
        $flag2 = true;
    }
    if ($_SESSION['obj_num_2'] == "vacio" and $flag2 != true){
        $_SESSION['obj_num_2'] = $datauser[$num_obj]['name'];
        $flag = true;
    }
    if ($_SESSION['obj_num_3'] == "vacio" and $flag == false){
        $_SESSION['obj_num_3'] = $datauser[$num_obj]['name'];
        $flag = true;
    }
    if ($_SESSION['obj_num_4'] == "vacio" and $flag == false){
        $_SESSION['obj_num_4'] = $datauser[$num_obj]['name'];
        $flag = true;
    }
    else{
        //changeOldObjects()
    }

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
    //generar daño
    if ($_SESSION['userhp'] <= $_SESSION['mobatk']) {
        //matar user / mostrar FIN
        $db = DataBaseConect::getConnection();
        $del_user = "DELETE FROM players WHERE name =" . $_SESSION['username'];
//        var_dump($del_user);
//        die;
        $db->executeQuery($del_user);
        header('location: ../views/end.php');
    }
    if ($_SESSION['mobhp'] <= $_SESSION['userpower']) {
        //matar mob
        $_SESSION['userhp'] = $_SESSION['userhp'] - $_SESSION['mobatk'];
        if($_SESSION['userfloor'] == 10 and $_SESSION['userhp'] >= 1){
            header('location: ../views/victory.php');
        }
        nextBattle();
    } else {
        $_SESSION['mobhp'] = $_SESSION['mobhp'] - $_SESSION['userpower'];
        $_SESSION['userhp'] = $_SESSION['userhp'] - $_SESSION['mobatk'];
    }
}

function nextBattle()
{
    //cambiar enemigo
    generateMob();

    //bajar nivel
    $db = DataBaseConect::getConnection();
    $_SESSION['userfloor'] = $_SESSION['userfloor'] + 1;
    $upd_user = "UPDATE players SET floor=".$_SESSION['userfloor']." WHERE name=".$_SESSION['username'];
    $db->executeQuery($upd_user);

    //obtener obj
    generateObject();


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