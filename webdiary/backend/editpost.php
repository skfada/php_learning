<?php
require_once "../db/config.php";


foreach ($_POST as $record){
    if (empty($record)){
        header("Location:../frontend/dashboard.php");
        exit();
    }
}


$content = $_POST["edited_content"];
$id = $_POST["id"];

$query = "UPDATE posts SET content = :content WHERE id = :id";
try {
    $command = $dbconnector->prepare($query);
    $command->execute([
        "content" => $content,
        "id" => $id
    ]);
} catch (PDOException $e) {
    die("Could not update post" . $e->getMessage());
}

header("Location:../frontend/dashboard.php");
exit();

?>
