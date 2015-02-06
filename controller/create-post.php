<?php

require_once (__DIR__ . "/../model/config.php");

$connection = new mysqli($host, $username, $password, $database);

$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

$query = $connection->query("INSEERT INTO posts SET title = '$title', post = '$post'");
//this helps us put it in my data base and show on "my admin"
if ($query) {
    echo "<p>Successfully insert post: $title</p>";
} else {
    echo "<p>$connection->error</p>";
}
$connection->close();