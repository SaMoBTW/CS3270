<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = htmlspecialchars($_POST["title"]);
    $languages = htmlspecialchars($_POST["languages"]);
    $description = htmlspecialchars($_POST["description"]);
    $projectUrl = htmlspecialchars($_POST["project-url"]);
    $projectPage = htmlspecialchars($_POST["project-page"]);
    $image = "/images/" . htmlspecialchars($_POST["project-image"]);
};

include_once("dbconnect.php");

$query = "INSERT INTO Projects (Title, Languages, Description, Image, link, File)VALUES ('$title', '$languages', '$description', '$image', '$projectUrl','$projectPage');";

$conn->query($query);

header("Location: ../home.php");
exit;