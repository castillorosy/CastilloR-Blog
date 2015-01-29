<!--make sure that this info. goes to the database file-->
<!--going to include the info we have here to the php file-->
<?php
require_once(__DIR__ . "../model/databasse.php");

$connection = new mysqli ($host, $username, $password);
//showing why the program shut off
if($connection->connect_error){
    die("Error: " . $connection->connect_error);
}
//"!" means it doesnt exists
$exists = $connection->select_db($database);
if(!$exists) {
   $query = $connection->query("CREATE DATABASE $database");
   
   if($query){
       echo "Successfully created database" . $database;
   }
}
 else {
    echo "Database alreadyc exists.";
}
//^ helps us make a query
$connection->close();