<?php
session_start();
if (!isset($_SESSION["user_id"])){
    // the user id is not in sesion
    header("Location:../frontend/login.php");
    exit();
}

require_once "../db/config.php";

$post_id = $_POST["post_id"];
$query = "SELECT * FROM posts WHERE id = :id";
try {
    $command = $dbconnector->prepare($query);
    $command->execute([
        "id" => $post_id
    ]);

    $result = $command->fetchAll();
    foreach ($result as $result){
        $content = $result["content"];
        $id = $result["id"];
        $title = $result["tittle"];
    }
} catch (PDOException $e) {
    die("Could not retrieve post" . $e->getMessage());
}


require_once "../includes/header.php";

?>

<div class="py-4">
<h3><?php echo htmlspecialchars($title); ?></h3>

<form action="../backend/editpost.php" method="post">
    <div class="form-floating mb-3">
        <input value="<?php echo htmlspecialchars($title); ?>" type="hidden" class="form-control" name="title" id="title" rows="3" placeholder="Write the title here">
        <label for="title">Title of the post</label>
    </div>

    <div class="form-floating mb-3">
        <textarea class="h-100 form-control" name="edited_content" id="content" rows="3"><?= htmlspecialchars($content) ?></textarea>
    </div>

    <input type="hidden" value="<?= $id ?>" name="id">

    <input class="btn btn-outline-primary btn-sm" type="submit" value="Submit">

</form>

<div class="py-1"><a class="btn btn-outline-danger btn-sm" href="../frontend/dashboard.php">Cancel</a></div>
</div>


<?php require_once "../includes/footer.php"; ?>