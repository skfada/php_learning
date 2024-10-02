<?php
session_start();
if (!isset($_SESSION["user_id"])){
    // the user id is not in sesion
    header("Location:../frontend/login.php");
    exit();
}

require_once "../db/config.php";
// user Id exits in the session.
$user_name = $_SESSION["username"];
$user_id = $_SESSION["user_id"];

//getting data from the database.
$query = "SELECT * FROM posts WHERE user_id = :userid ORDER BY post_date DESC";

try {
    $command = $dbconnector->prepare($query);
    $command->execute([
        "userid" => $user_id

    ]);
    $rows = $command->fetchAll();
} catch (PDOException $e) {
    die("Could not retrieve posts" . $e->getMessage());
}






?>