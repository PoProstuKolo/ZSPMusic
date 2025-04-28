<?php 
include "db_connect.php";


$login = $_POST['login'];
$pass = $_POST['password'];
$password = md5($pass);
$name = $_POST['name'];
$surename = $_POST['surename'];
$nickname = $_POST['nickname'];
$votes = 5;

$sql = "INSERT INTO users (login, password, name, surename, nickname, user_votes) VALUES('$login', '$password', '$name', '$surename', '$nickname', $votes)";

if ($conn->query($sql) === TRUE) {
    header("Location: panel-login.php");
}

?>