<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $targetProject = htmlspecialchars($_POST["target-project"]);
    $title = htmlspecialchars($_POST["title"]);
    $languages = htmlspecialchars($_POST["languages"]);
    $description = htmlspecialchars($_POST["description"]);
    $projectUrl = htmlspecialchars($_POST["project-url"]);
    $image = "/images/" . htmlspecialchars($_POST["project-image"]);
};

include_once("dbconnect.php");

$query = "UPDATE Projects SET Title = '$title', Image = '$image', Languages = '$languages', Description = '$description', Link = '$projectUrl' WHERE Title = '$targetProject';";

$conn->query($query);

header("Location: ../home.php");
exit;