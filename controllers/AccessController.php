<?php
declare(strict_types=1);

include_once '../adapters/DataBaseConect.php';

$db = DataBaseConect::getConnection();
//$ok = 0;

$usuari_r = filter_input(INPUT_POST, 'name_user_register');
$password_r = filter_input(INPUT_POST, 'passw_user_register');

$class = filter_input(INPUT_POST, 'clases');

$usuari_l = filter_input(INPUT_POST, 'name_user_login');
$password_l = filter_input(INPUT_POST, 'passw_user_login');

if ($usuari_r) {

    if($class == "warrior"){
        $hp = 20 ;
        $power = 6;
    }
    elseif($class == "thief"){
        $hp = 15 ;
        $power = 4;
    }
    else{
        $hp = 12;
        $power = 10;
    }

    $query = "INSERT INTO players (name, password, level, hp, class, state, floor, power) VALUES ('" . $usuari_r . "','" . $password_r . "','" . 1 . "','" . $hp . "','" . $class . "','" . "none" . "','" . 1 . "','" . $power . "')";
    $ok = $db->executeQuery($query);
    if ($ok) {
        header('location: ../views/game.php');
    }
}

$datauser = [];
$datauser2 = [];

if ($usuari_l) {

    $query = "SELECT level FROM players WHERE name = '" . $usuari_l . "' and password = '" . $password_l . "';";
    $db->executeQuery($query, $datauser2);
    $ok = $datauser2[0]['level'];

    if($ok){
        $query = "SELECT name, password, level, hp, class, state, floor, power FROM players WHERE name = '" . $usuari_l . "'";
        $db->executeQuery($query, $datauser);
        $_SESSION['username'] = $usuari_l;
        $_SESSION['userlevel'] = $datauser[0]['level'];
        $_SESSION['userpasswd'] = $password_l;
        $_SESSION['userhp'] = $datauser[0]['hp'];
        $_SESSION['userclass'] = $datauser[0]['class'];
        $_SESSION['userstate'] = $datauser[0]['state'];
        $_SESSION['userfloor'] = $datauser[0]['floor'];
        $_SESSION['userpower'] = $datauser[0]['power'];
//        header('location: ../views/game.php');
    }
    else{
        header('location: ../views/login&registro.php');
    }
}