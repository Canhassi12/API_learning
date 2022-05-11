<?php

use LDAP\Result;

include 'Routes.php';
include 'Database/db.php';


Routes::methodGet('/api/get', function(){

    $db = new Data();

    $results = $db->get();

    echo json_encode($results);
});

Routes::methodGet('/', function(){
    echo 'É';
});
