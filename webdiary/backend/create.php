<?php
require_once '../db/config.php';



if (!empty($_POST)){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd1 = $_POST['pwd1'];
    $pwd2 = $_POST['pwd2'];

    if($pwd1 !== $pwd2){
        // when both password are not the same
        header('location:../frontend/register.php');
        exit();
    } else {
        // when the passwords ar the same
        $hashed_pwd = password_hash($pwd2, PASSWORD_BCRYPT);

        $query = 'INSERT INTO users(username, email, pwd) VALUES(?, ?, ?)';
        $command = $dbconnector->prepare($query);


        try {
            $command->execute([$username, $email, $hashed_pwd]);
        } catch (PDOException $e) {
            $msg = "The Username or Email Already Exists!!!";
            setcookie("duplicateMsg", $msg);
            header('location:../frontend/register.php');
            die("Unique values required: " . $e->getMessage());
        }

        header('location:../frontend/login.php');
        die('registration Completed');
    }




}




?>