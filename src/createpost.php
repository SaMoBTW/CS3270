<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = htmlspecialchars($_POST["title"]);
    $languages = htmlspecialchars($_POST["languages"]);
    $description = htmlspecialchars($_POST["description"]);
    $projectUrl = htmlspecialchars($_POST["project-url"]);
    $image = "/images/" . htmlspecialchars($_POST["project-image"]);
};

$DB_NAME = "smahmoud";
$DB_HOST = "localhost";
$DB_USER = "smahmoud";
$DB_PASS = "ny7015eq";

try {
    $conn = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecteed Successfully", PHP_EOL;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$query = "INSERT INTO Projects (Title, Languages, Description, Image, link)VALUES ('$title', '$languages', '$description', '$image', '$projectUrl');";

$conn->query($query);