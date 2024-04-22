<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = htmlspecialchars($_POST["title"]);
    $languages = htmlspecialchars($_POST["languages"]);
    $languages = htmlspecialchars($_POST["languages"]);
    $description = htmlspecialchars($_POST["description"]);
    $projectUrl = htmlspecialchars($_POST["project-url"]);
    $image = htmlspecialchars($_POST["project-image"]);

}

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

$query = "INSERT INTO Projects (Project_title, Title, Languages, Description, Image, link)VALUES ('Test Project Title', 'Test Title', 'HTML, CSS, Bootstrap, PHP, Water, Chum', 'here is a TEST description', 'images/dolphins.jpg', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');";

$conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>