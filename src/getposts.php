<?php
  include_once("dbconnect.php");
//   $showTable = "SELECT * FROM Projects";
//   $stmt = $conn->query($showTable)->fetchall(PDO::FETCH_ASSOC);
  
//   foreach ($stmt as $row) {
//   echo '<div class="col-md-6">';
//   echo '<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">';

//   echo '<div class="col-auto d-none d-lg-block">';
//   echo '<img src=".' . $row["Image"] . '" class="card-img-top" alt="...">';
//   echo '</div>';

//   echo '<div class="col p-4 d-flex flex-column position-static">';

//   echo '<h3 class="mb-0 gap card-title">' . $row["Title"] . '</h3>';
//   echo '<p class="mb-1 text-muted gap left-margin">' . $row["Languages"] . '</p>';
//   echo '<h5 class="card-text mb-auto gap left-margin">' . $row["Description"] . '</h5>';

//   // Check and display link within content column
//   if (!empty($row["Link"])) {
//     echo '<a href="' . $row["Link"] . '" target="_blank" class="stretched-link btn-primary gap left-margin purple-text">Github Repo</a>';
//   }

//   echo '</div>';

//   echo '</div>';
//   echo '</div>';

//   // Separator (horizontal line)
//   echo "<hr>";
// }

class Project {
    private $title;
    private $image;
    private $languages;
    private $description;
    private $link;

    public function __construct($title, $image, $languages, $description, $link) {
        $this->title = $title;
        $this->image = $image;
        $this->languages = $languages;
        $this->description = $description;
        $this->link = $link;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getImage() {
        return $this->image;
    }

    public function getLanguages() {
        return $this->languages;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getLink() {
        return $this->link;
    }
}

class ProjectManager {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getProjects() {
        $showTable = "SELECT * FROM Projects";
        $stmt = $this->conn->query($showTable)->fetchAll(PDO::FETCH_ASSOC);
        $projects = [];

        foreach ($stmt as $row) {
            $project = new Project($row["Title"], $row["Image"], $row["Languages"], $row["Description"], $row["Link"]);
            $projects[] = $project;
        }

        return $projects;
    }

    public function displayProjects() {
        $projects = $this->getProjects();

        // Start the row
        echo '<div class="row">';

        foreach ($projects as $project) {
            // Each project occupies a column of half the width on medium screens and larger
            echo '<div class="col-md-6">';
            echo '<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">';

            echo '<div class="col-auto d-none d-lg-block">';
            echo '<img src=".' . $project->getImage() . '" class="card-img-top" alt="...">';
            echo '</div>';

            echo '<div class="col p-4 d-flex flex-column position-static">';

            echo '<h3 class="mb-0 gap card-title">' . $project->getTitle() . '</h3>';
            echo '<p class="mb-1 text-muted gap left-margin">' . $project->getLanguages() . '</p>';
            echo '<h5 class="card-text mb-auto gap left-margin">' . $project->getDescription() . '</h5>';

            // Check and display link within content column
            if (!empty($project->getLink())) {
                echo '<a href="' . $project->getLink() . '" target="_blank" class="stretched-link btn-primary gap left-margin purple-text">Github Repo</a>';
            }

            echo '</div>';

            echo '</div>';
            echo '</div>';

            // Separator (horizontal line) - removed for cleaner output
            // echo "<hr>";
        }

        // End the row
        echo '</div>';
    }
}


?>