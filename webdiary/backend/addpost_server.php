<?php
session_start();
require_once "../db/config.php";

foreach ($_POST as $input => $value){
    if ($value === ""){
        //empty fields
        header("Location:../frontend/addpost.php");
        exit();
    }

}
//the post method fields are not empty
$title = $_POST['title'];
$content = $_POST['content'];

$query = "INSERT INTO posts (user_id, tittle, content) VALUE(:user_id, :title, :content)";

try{
    $command = $dbconnector->prepare($query);
    $command->execute([
        "user_id" => $_SESSION["user_id"],
        "title" => $title,
        "content" => $content
    ]);
} catch (PDOException $e) {
    die("Could not add new post: " . $e->getMessage());
}

header("Location:../frontend/dashboard.php");





?>