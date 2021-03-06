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

    if($_SESSION['userfloor'] % 2 == 0){
        $flag2 = false;

        if($_SESSION['obj_name_1'] == "vacio" ){
            $_SESSION['obj_name_1'] = $datauser[$num_obj]['name'];
            $flag2 = true;
        }
        elseif ($_SESSION['obj_name_2'] == "vacio" and $flag2 == false ){
            $_SESSION['obj_name_2'] = $datauser[$num_obj]['name'];
            $flag2 = true;
        }
        elseif ($_SESSION['obj_name_3'] == "vacio" and $flag2 == false){
            $_SESSION['obj_name_3'] = $datauser[$num_obj]['name'];
            $flag2 = true;
        }
        elseif ($_SESSION['obj_name_4'] == "vacio" and $flag2 == false){
            $_SESSION['obj_name_4'] = $datauser[$num_obj]['name'];
        }
    }

}

function useObject($name_obj, $var)
{

    $db = DataBaseConect::getConnection();
    $query = "SELECT name, effect, num FROM objects WHERE name = '". $name_obj ."'";
    $datauser4 = [];
    $db->executeQuery($query, $datauser4);
    $effect_q = $datauser4[0]['effect'];
    $num_q = $datauser4[0]['num'];

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
    $name = "obj_name_".$var;
    $_SESSION[''.$name.''] = "vacio";


}

function simulateCombat()
{
    //generar daño
    if ($_SESSION['userhp'] <= $_SESSION['mobatk']) {
        endGame();
    }
    if ($_SESSION['mobhp'] <= $_SESSION['userpower']) {
        //matar mob
        $_SESSION['userhp'] = $_SESSION['userhp'] - $_SESSION['mobatk'];
        if($_SESSION['userfloor'] == 10 and $_SESSION['userhp'] >= 1){
            $db = DataBaseConect::getConnection();
            $win = "INSERT INTO winners (name) VALUES ('" . $_SESSION['username'] . "')";
            $db->executeQuery($win);
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
    $_SESSION['userfloor'] = $_SESSION['userfloor'] + 1;
    $planta = $_SESSION['userfloor'];
    $user = $_SESSION['username'];
    $db = DataBaseConect::getConnection();
    $upd_user = "UPDATE players SET floor=".$planta." WHERE name='".$user."'";
    $db->executeQuery($upd_user);

    //obtener obj
    generateObject();

}


function endGame()
{
    $user = $_SESSION['username'];
    $db = DataBaseConect::getConnection();
    $del_user = "DELETE FROM players WHERE name ='" . $user . "'";
    $db->executeQuery($del_user);

    session_destroy();

    header('location: ../views/end.php');
}

//function generateTxt()
//{
//
//}
//
//function overwrite()
//{
//
//}