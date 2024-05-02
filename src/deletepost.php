<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = htmlspecialchars($_POST["title"]);
}
;

include_once ("dbconnect.php");


$query = "DELETE FROM Projects WHERE Title = '$title';";

$conn->query($query);

header("Location: ../home.php");
exit;
