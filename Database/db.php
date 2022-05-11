<?php

include '../src/model/Cliente.php';

class Data {

    private $conn;

    public function __construct()
    {
        $this->conn = new PDO('mysql:host=localhost;dbname=api', 'root', 'root');
    }

    public function post(Cliente $client): void
    {
        $query = sprintf("INSERT INTO test (Name, Age, Email) VALUES('%s', '%d', '%s')", 
            $client->getName(),  
            $client->getAge(), 
            $client->getEmail()
        ); 
        $this->conn->query($query);
    }

    public function update($query): void
    {
        $this->conn->query($query);
    }

    public function get()
    {
        $sql = "SELECT * FROM test";
        $query = $this->conn->query($sql);
        return $query->fetchAll();
    }

    public function delete($query): void
    {
        $this->conn->query($query);
    }

}