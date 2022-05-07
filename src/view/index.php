<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input name="name" type="text">
        <input name="age" type="text">
        <input name="email" type="text">
        <button type="submit"> Enviar </button>
    </form>
</body>
</html>

<?php

include 'Database/db.php';
include 'src\model\Cliente.php';




$name = $_POST["name"];
$age = $_POST["age"];
$email = $_POST["email"];

$client = new Cliente($name, $age, $email);

var_dump($client->getName()); 

// $db = new Data();
// $db->post($client);
