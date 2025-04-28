<?php
include "db_connect.php";

include "functions.php";
$id = $_GET["id"];
$userid = $_GET["userid"];

$votesCountSQL = "SELECT user_votes FROM users WHERE id_user =" . $userid;
$votesCountResult = mysqli_query($conn, $votesCountSQL);
if ($votesCountResult->num_rows > 0) {
    while($row = $votesCountResult->fetch_assoc()) {
        $votesCount = $row["user_votes"];
    }}
if($votesCount >= 1){
    vote_down($id, $userid);
    header("Location: zalogowany.php#votes");
} else {
    header("Location: zalogowany.php#votes");
}
?>