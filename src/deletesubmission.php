<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senderName = htmlspecialchars($_POST["sender-name"]);
}
;

include_once ("dbconnect.php");

$query = "DELETE FROM Messages WHERE name = '$senderName';";

$conn->query($query);

header("Location: ../home.php");
exit;
