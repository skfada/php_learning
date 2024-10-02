<?php
session_start();
if (!isset($_SESSION["user_id"])){
    // the user id is not in sesion
    header("Location:../frontend/login.php");
    exit();
}

$title = "Delete Post";
require_once "../includes/header.php";


$tittle = $_POST['tittle'];
$content = $_POST['content'];
$id = $_POST['id'];
?>



<h3>Welcome to <?= $title ?> page</h3>
<p><b class="text-danger">Caution!:</b> By clicking on the below button, you are confirming that the post should be deleted entirely.</p>


<div>
    <hr>
        <h3><?php echo htmlspecialchars($tittle); ?></h3>
        <p><?= htmlspecialchars($content); ?></p>
    <hr>
<form action="../backend/deletepost.php" method="post">
    <input type="hidden" value="<?= $id ?>" name="id">
    <input class="btn btn-outline-danger btn-sm" type="submit" value="Continue with Delete">
</form>

<div class="py-1"><a class="btn btn-outline-primary btn-sm" href="../frontend/dashboard.php">Back to Dashboard</a></div>
</div>
















<?php
require_once "../includes/footer.php";
?>