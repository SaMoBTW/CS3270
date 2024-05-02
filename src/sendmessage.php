<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senderName = htmlspecialchars($_POST["sender-name"]);
    $senderEmail = htmlspecialchars($_POST["sender-email"]);
    $senderMessage = htmlspecialchars($_POST["sender-message"]);
};

include_once("dbconnect.php");

$query = "INSERT INTO Messages (name, email, message)VALUES ('$senderName', '$senderEmail', '$senderMessage');";

$conn->query($query);

header("Location: ../contact.php");
exit;
