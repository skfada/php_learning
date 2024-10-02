<?php
session_start();
require_once "../db/config.php";

// login authentication
if (!empty($_POST)){
    $inputedEmail = $_POST['email'];
    $inputedPwd = $_POST['pwd'];

    $query = "SELECT * FROM users WHERE email= :email";
    $command = $dbconnector->prepare($query);
    $command->execute(['email' => $inputedEmail]);
    //getting single record or row.
    $result = $command->fetch();

    // verify password
    $verified_pwd = password_verify($inputedPwd, $result['pwd']);

    if (!$result){
        //invalid emmail
        echo "Email is not correct";
        header("Location:../frontend/login.php");
        exit();
    } elseif (!$verified_pwd){
        //invalid password
        echo "Password is not correct";
        header("Location:../frontend/login.php");
        exit();
    } else {
        // adding user to the session.
        $_SESSION["user_id"] = $result["id"];
        $_SESSION["username"] = $result["username"];
        header("Location:../frontend/dashboard.php");
        exit();
    }




/*



    if (!empty($result)){
        echo "Welcome Onboard";
        var_dump($result);

        header("location:../frontend/dashboard.php");
        exit();
    } else {
        echo "Email is invalid";
        header("location:../frontend/login.php");
        exit();
    }
} else {
    echo "please fill the details";
    header("location:../frontend/login.php");
    exit();
    */
}



?>