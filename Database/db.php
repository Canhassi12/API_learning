<?php

include 'src\model\Cliente.php';

class Data {

    private $conn;

    public function __construct()
    {
        $this->conn = new PDO('mysql:host=localhost;dbname=api', 'root', 'root');
    }

    public function post($client): void
    {
        $query = "INSERT INTO test (Name, Age, Email)
        VALUES ($client->getName(), $client->getAge(), $client->getEmail())"; 
        $this->conn->query($query);
    }

    public function update($query): void
    {
        $this->conn->query($query);
    }

    public function get($query): void
    {
        $this->conn->query($query);

    }

    public function delete($query): void
    {
        $this->conn->query($query);
    }

}

