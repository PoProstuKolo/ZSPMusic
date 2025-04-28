<?php 
include "db_connect.php";


if(isset($_POST['login']) && isset($_POST['password'])){
    $login = $_POST['login'];
    $pass = $_POST['password'];
    $password = md5($pass);

    $nameSQL = "SELECT name FROM users WHERE BINARY login =".'"'.$login.'"'." AND password = ".'"'.$password.'"';
    $nameResult = mysqli_query($conn, $nameSQL);
    if ($nameResult->num_rows > 0) {
        while($row = $nameResult->fetch_assoc()) {
            $name = $row["name"];
        }}

    $surenameSQL = "SELECT surename FROM users WHERE BINARY login =".'"'.$login.'"'." AND password = ".'"'.$password.'"';
    $surenameResult = mysqli_query($conn, $surenameSQL);
    if ($surenameResult->num_rows > 0) {
        while($row = $surenameResult->fetch_assoc()) {
            $surename = $row["surename"];
        }}

    $nicknameSQL = "SELECT nickname FROM users WHERE BINARY login =".'"'.$login.'"'." AND password = ".'"'.$password.'"';
    $nicknameResult = mysqli_query($conn, $nicknameSQL);
    if ($nicknameResult->num_rows > 0) {
        while($row = $nicknameResult->fetch_assoc()) {
            $nickname = $row["nickname"];
        }}
    $userIDSQL = "SELECT id_user FROM users WHERE BINARY login =".'"'.$login.'"'." AND password = ".'"'.$password.'"';
    $userIDResult = mysqli_query($conn, $userIDSQL);
    if ($userIDResult->num_rows > 0) {
        while($row = $userIDResult->fetch_assoc()) {
            $userID = $row["id_user"];
        }}
    $userVotesSQL = "SELECT user_votes FROM users WHERE BINARY login =".'"'.$login.'"'." AND password = ".'"'.$password.'"';
    $userVotesResult = mysqli_query($conn, $userVotesSQL);
    if ($userVotesResult->num_rows > 0) {
        while($row = $userVotesResult->fetch_assoc()) {
            $userVotes = $row["userVotes"];
        }}




    $sql = "SELECT * FROM users WHERE BINARY login =".'"'.$login.'"'." AND password = ".'"'.$password.'"';
    $result = mysqli_query($conn, $sql);
    if( mysqli_num_rows($result) > 0){
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['name'] = $name;
        $_SESSION['surename'] = $surename;
        $_SESSION['nickname'] = $nickname;
        $_SESSION['id_user'] = $userID;
        $_SESSION['user_votes'] = $userVotes;
        header("Location: zalogowany.php");
    } else{
        header("Location: panel-login__error.php");
    }
}

mysqli_close($conn);
?>