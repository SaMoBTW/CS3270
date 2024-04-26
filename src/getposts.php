<?php

try{
  include_once("dbconnect.php");

  $showTable = "SELECT * FROM Projects";
  $stmt = $conn->query($showTable)->fetchall(PDO::FETCH_ASSOC);
  
  foreach ($stmt as $row) {
  echo '<div class="col-md-6">';
  echo '<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">';

  echo '<div class="col-auto d-none d-lg-block">';
  echo '<img src=".' . $row["Image"] . '" class="card-img-top" alt="...">';
  echo '</div>';

  echo '<div class="col p-4 d-flex flex-column position-static">';

  echo '<h3 class="mb-0 gap card-title">' . $row["Title"] . '</h3>';
  echo '<p class="mb-1 text-muted gap left-margin">' . $row["Languages"] . '</p>';
  echo '<h5 class="card-text mb-auto gap left-margin">' . $row["Description"] . '</h5>';

  // Check and display link within content column
  if (!empty($row["Link"])) {
    echo '<a href="' . $row["Link"] . '" target="_blank" class="stretched-link btn-primary gap left-margin purple-text">Github Repo</a>';
  }

  echo '</div>';

  echo '</div>';
  echo '</div>';

  // Separator (horizontal line)
  echo "<hr>";
}  
}catch(PDOException $e){
  die("Query failed: ". $e->getMessage());
}

?>