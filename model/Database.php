<?php

//private means we can only connect it in this file
class Database {

    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function openConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
        //this code is if the connecction fails and 
        //indecate why are we quitting the program 
        //showing why the program shut off
        if ($this->connection->connect_error) {
            die("<p>Error: " . $this->connection->connect_error . "</p>");
        }
    }

//make sure to open if yes then were able to close
    public function closeConnection() {
//        to check if the information is present
//        in the connection varible , if it isn't set 
        if (isset($this->connection)) {
            $this->connection->close();
        }
    }

    public function query($string) {
        $this->openConnection();
        
        $query = $this->connection->query($string);
        
        $this->closeConnection();
        
        return $query;
    }
//public any file can access it
}
