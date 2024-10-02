<?php
$title = "Dashboard";
$active_dashboard = "active";

require_once "../includes/header.php";
require_once "../backend/dashboard_server.php";



$title = $_POST["title"];
$content = $_POST["content"];
?>

    <h1>Welcome to Dashboard <?php echo $user_name; ?></h1>
    <a class="btn btn-outline-primary btn-sm" href="../frontend/addpost.php">Add New Post</a>
    <hr>


    <?php foreach ($rows as $row): ?>
        <div>
            <h3><?php echo $row["tittle"]; ?></h3>
            <p><?php echo $row["content"]; ?></p>
            <p><b>Date Posted: </b><?php echo $row["post_date"]; ?></p>
            <span id="buttons">
                <form action="../frontend/editpost.php" method="post">
                    <input type="hidden" name="post_id" value="<?= $row["id"]; ?>">
                    <input class="btn btn-outline-warning btn-sm" type="submit" value="Edit Post" name="submit">
                </form>

                <form action="../frontend/deletepost.php" method="post">
                    <input type="hidden" name="tittle" value="<?php echo $row["tittle"]; ?>">
                    <input type="hidden" name="content" value="<?php echo $row["content"]; ?>">
                    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                <div class="py-1"><input class="btn btn-outline-danger btn-sm " type="submit" value="Delete Post"></div>
                </form>

            </span>

            <hr>
        </div>
    <?php endforeach ?>

<?php
require_once "../includes/footer.php";
?>