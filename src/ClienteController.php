<?php

include '../Database/db.php';

$name = $_POST["name"];
$age = $_POST["age"];
$email = $_POST["email"];

$client = new Cliente($name, $age, $email);

$db = new Data();
$db->post($client);