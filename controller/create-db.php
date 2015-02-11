<!--make sure that this info. goes to the database file-->
<!--going to include the info we have here to the php file-->
<?php
require_once (__DIR__ . "/../model/config.php");
//creating tables by connection tables together that we are
//able to put into text
$query = $_SESSION["connection"]->query("CREATE TABLE  posts ("
        . "id int (11) NOT NULL AUTO_INCREMENT,"
        . "title  varchar (255) NOT NULL,"
        . "post text NOT NULL,"
        . "PRIMARY KEY (id))");

if ($query) {
    echo "<p>Successfully created table: post</p>";
} else {
    echo "<p>" . $_SESSION["connection"]->error ."</p>";
}
//^ helps us make a query and if figure out if query
//was succesful or not
