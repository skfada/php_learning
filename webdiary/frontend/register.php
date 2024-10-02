<?php

require_once '../backend/create.php';

$title = "Register";
$active_register = "active";
require_once "../includes/header.php";

$email = "email";
$pwd1 = "pwd1";
$pwd2 = "pwd2";
?>

<div>

    <?php if (in_array("duplicateMsg", $_COOKIE)): ?>
        <?php echo $_COOKIE["duplicateMsg"]; ?>
    <?php endif ?>


    <form action="../backend/create.php" method="post">
        <legend>Please carefully fill the below details</legend><br>

        <div class="form-floating mb-3">
            <input class="form-control" type="text" name="username" id="username" placeholder="nickname" required>
            <label for="username">username</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" type="email" name="<?= $email ?>" id="<?= $email ?>" placeholder="Examplae@gmail.com" required>
            <label for="<?= $email ?>">Email Address</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" type="password" name="<?= $pwd1 ?>" id="<?= $pwd1 ?>" placeholder="Examplae@12345678" required>
            <label for="<?= $pwd1 ?>">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" type="password" name="<?=$pwd2 ?>" id="<?=$pwd2 ?>" placeholder="Examplae@12345678" required>
            <label for="<?=$pwd2 ?>">Confirm Password</label>
        </div>

        <div><input class="btn btn-primary" type="submit" value="Submit Form"></div>
    </form>

</div>



<?php
require_once "../includes/footer.php";
?>
