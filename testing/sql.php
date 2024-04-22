<?php

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

$friends = [
    [
        "firstName" => "somebody",
        "LastName" => "someNobody",
        "phoneNumber" => "218-111-1111"
    ],
    [
        "firstName" => "somebody2",
        "LastName" => "someNobody2",
        "phoneNumber" => "218-222-2222"
    ],
    [
        "firstName" => "somebody3",
        "LastName" => "someNobody3",
        "phoneNumber" => "218-333-3333"
    ],
    [
        "firstName" => "somebody4",
        "LastName" => "someNobody4",
        "phoneNumber" => "218-444-4444"
    ],
    [
        "firstName" => "somebody5",
        "LastName" => "someNobody5",
        "phoneNumber" => "218-555-5555"
    ]
];

$query =
    "CREATE TABLE friends(
	_id int AUTO_INCREMENT PRIMARY KEY,
	_created_date DATETIME default CURRENT_TIMESTAMP,
	_deleted_date DATETIME,
	first_name varchar(255) NOT NULL,
	last_name varchar(255) NOT NULL,
	phone_number varchar(255)
);";

$conn->query($query);

?>