<?php
session_start();
if (!isset($_SESSION["user_id"])){
    // the user id is not in sesion
    header("Location:../frontend/login.php");
    exit();
}

require_once "../db/config.php";

$id = $_POST['id'];

$query = "DELETE FROM posts WHERE id = :id";
try {
    $command = $dbconnector->prepare($query);
    $command->execute([
        "id" => $id
    ]);

} catch (PDOException $e) {
    die("Could not Delete Post: " . $e->getMessage());
}

header("Location:../frontend/dashboard.php");
exit();
?>