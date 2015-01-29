<!--make sure that this info. goes to the database file-->
<!--going to include the info we have here to the php file-->
<?php
require_once ("../model/databasse.php");

$connection = new mysqli ($host, $username, $password);
//showing why the program shut off
if($connection->connect_error){
    die("Error");
}
else{
    echo "Success";
}