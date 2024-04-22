<?php

$DB_HOST = "cs.bemidjistate.edu";
$DB_NAME = "smahmoud";
$DB_USER = "smahmoud";

// Don't store the password directly in the code
// Consider using environment variables or a secure configuration file
$DB_PASS = "ny7015eq";

try {
    $conn = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sql</title>
</head>
<body>
    <h1>SQL Page</h1>
</body>
</html>