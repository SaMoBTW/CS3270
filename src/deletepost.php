<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = htmlspecialchars($_POST["title"]);
};

include_once("dbconnect.php");

echo $title;

$query = "DELETE FROM Projects WHERE Title = '$title';";

$conn->query($query);
