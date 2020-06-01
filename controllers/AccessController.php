<?php
declare(strict_types=1);

//session_destroy();
session_start();

include_once '../adapters/DataBaseConect.php';


$db = DataBaseConect::getConnection();
//$ok = 0;

$usuari_r = filter_input(INPUT_POST, 'name_user_register');
$password_r = filter_input(INPUT_POST, 'passw_user_register');

$class = filter_input(INPUT_POST, 'clases');

$usuari_l = filter_input(INPUT_POST, 'name_user_login');
$password_l = filter_input(INPUT_POST, 'passw_user_login');


if ($usuari_r) {

    $query = "INSERT INTO players (name, password, level, hp, class, state, floor, power) VALUES ('" . $usuari_r . "','" . $password_r . "','" . $level . "','" . $hp . "','" . $class . "','" . $state . "','" . $floor . "','" . $power . "')";
    $ok = $db->executeQuery($query);
    if ($ok) {
        $_SESSION['username'] = $usuari_r;
        $_SESSION['userpasswd'] = $password_r;
        $_SESSION['userhp'] = 20;
        $_SESSION['userclass'] = "warrior";
        $_SESSION['userlevel'] = 1;
        $_SESSION['userstate'] = "none";
        $_SESSION['userfloor'] = 1;
        $_SESSION['userpower'] = 6;

        header('location: ../views/game.php');
    }
}

if ($usuari_l) {

    $datauser = [];
    $query = "SELECT name, password, level, hp, class, state, floor, power FROM players WHERE name = '" . $usuari_l . "'";
    $db->executeQuery($query, $datauser);

    if($password_l == $datauser[0]['password']){

        $_SESSION['username'] = $datauser[0]['name'];
        $_SESSION['userlevel'] = $datauser[0]['level'];
        $_SESSION['userpasswd'] = $datauser[0]['password'];
        $_SESSION['userhp'] = $datauser[0]['hp'];
        $_SESSION['userclass'] = $datauser[0]['class'];
        $_SESSION['userstate'] = $datauser[0]['state'];
        $_SESSION['userfloor'] = $datauser[0]['floor'];
        $_SESSION['userpower'] = $datauser[0]['power'];

        header('location: ../views/game.php');
    }
    else{
        header('location: ../index.html');
    }
}