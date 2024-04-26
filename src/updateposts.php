<?php

include_once("dbconnect.php");

$query = "UPDATE Projects (Title, Languages, Description, Image, link)VALUES ('$title', '$languages', '$description', '$image', '$projectUrl');";

$conn->query($query);