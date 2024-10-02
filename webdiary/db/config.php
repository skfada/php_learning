<?php

$host = 'localhost';
$user = 'crud_admin';
$dbName = 'crudapp';
$pwd = 'Dummy@12345';

try {
    //connect to db
    $dbconnector = new PDO(
        "mysql:host=$host;dbname=$dbName",
        $user,
        $pwd
    );
    //set attribute
    $dbconnector->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connection to the database not successful: ' . $e->getMessage());
}

?>