<?php

try{
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

  $showTable = "SELECT * FROM Projects";
  $stmt = $conn->query($showTable)->fetchall(PDO::FETCH_ASSOC);
  
  // Loop through each row in the results
  foreach ($stmt as $row) {
    echo "<h3>" . $row["Title"] . "</h3>" . PHP_EOL;
    echo "<p><b>Languages:</b> " . $row["Languages"] . "</p>" . PHP_EOL;
    echo "<p><b>Description:</b> " . $row["Description"] . "</p>" . PHP_EOL;
    if (!empty($row["Link"])) {  // Check if Link is not empty
      echo "<p><b>Link:</b> <a href='" . $row["Link"] . "'>" . $row["Link"] . "</a></p>" . PHP_EOL;
    }
    if (!empty($row["Image"])) {  // Check if Image is not empty
      echo "<img src='" . $row["Image"] . "' alt='" . $row["Title"] . "'>" . PHP_EOL;
    }
    echo "<hr>"; // Horizontal line as separator
  }
  
}catch(PDOException $e){
  die("Query failed: ". $e->getMessage());
}

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