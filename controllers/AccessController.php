<?php
declare(strict_types=1);

include_once '../adapterspackage/DBConnectionFactory.php';

$db = DBConnectionFactory::getConnection();
$datauser = [];
$ok = 0;

$usuari_r = filter_input(INPUT_POST, 'name_user_register');
$password_r = filter_input(INPUT_POST, 'passw_user_register');

$usuari_l = filter_input(INPUT_POST, 'name_user_login');
$password_l = filter_input(INPUT_POST, 'passw_user_login');


if ($usuari_r) {
    $query = "INSERT INTO users (name, password, level, hp, class, state, attack, floor, power) VALUES 
('" . $usuari_r . "','" . $password_r . "','" . $level . "','" . $hp . "','" . $class . "','" . $class . "','" . $class . "');";
    $ok = $db->executeQuery($query);
    $usuari = $usuari_r;
} else {
    $query = "SELECT id FROM users WHERE name = '" . $usuari_l . "' and password = '" . $password_l . "';";
    $db->executeQuery($query, $datauser);
    $ok = $datauser[0]['name'];
    $usuari = $usuari_l;
}
if ($ok) {
    $query = "SELECT name, password, level, hp, class, state, attack, floor, power FROM users WHERE name = '" . $usuari . "';";
    $db->executeQuery($query, $datauser);
    setcookie('username', $datauser[0]['name'], 0, '/', 'localhost');
    setcookie('userlevel', $datauser[0]['level'], 0, '/', 'localhost');
    setcookie('userpoints', $datauser[0]['points'], 0, '/', 'localhost');
    $_SESSION['userid']= $datauser[0]['name'];
    header('location: ../viewspackage/MainView.php');
} else {
    header('location: ../viewspackage/BadLogin.php');
}