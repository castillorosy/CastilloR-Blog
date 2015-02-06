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
    public  function openConnection(){
        
    }
    public function closeConnection(){
        
    }
    public function query($string){
        
    }
//public any file can acces it
}