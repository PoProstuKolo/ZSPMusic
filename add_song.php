<?php
include "db_connect.php";
include "functions.php";
$title = $_POST["title"];
$link = $_POST["link"];
add_song($title, $link);
header("Location: zalogowany.php");
?>