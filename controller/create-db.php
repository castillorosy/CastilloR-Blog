<!--make sure that this info. goes to the database file-->
<!--going to include the info we have here to the php file-->
<?php
require_once (__DIR__ . "/../model/database.php");

$connection = new mysqli ($host, $username, $password);
//showing why the program shut off
if($connection->connect_error){
   die("<p>Error: " . $connection->connect_error . "</p>");
}
//"!" means it doesnt exists
$exists = $connection->select_db($database);
if(!$exists) {
   $query = $connection->query("CREATE DATABASE $database");
   
   if($query){
       echo "<p>Successfully created database: " . $database . "</p>";
   }
}
 else {
    echo "<p>Database already exists.</p>";
}
//creating tables by connection tables together that we are
//able to put into text
$query = $connection->query("CREATE TABLE  posts ("
        . "id int (11) NOT NULL AUTO_INCREMENT,"
        ."title  varchar (255) NOT NULL,"
        . "post text NOT NULL,"
        . "PRIMARY KEY (id))");

if($query){
    echo "<p>Successfully created table: post</p>"; 
}

else {
    echo "<p>$connection->error</p>";
}
//^ helps us make a query
$connection->close();