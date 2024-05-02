<?php
  include_once("dbconnect.php");

class ProjectTitle {
    private $title;

    public function __construct($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }
}

class ProjectTitleManager {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getTitles() {
        $showTable = "SELECT Title FROM Projects";
        $stmt = $this->conn->query($showTable)->fetchAll(PDO::FETCH_ASSOC);
        $projects = [];

        foreach ($stmt as $row) {
            $project = new ProjectTitle($row["Title"]);
            $projects[] = $project;
        }

        return $projects;
    }

    public function displayTitles() {
        $projects = $this->getTitles();

        echo '<div class="row project-titles">';

        foreach ($projects as $project) {
            echo '<div class="col-md-2">';
            echo '<div class="row g-0 border rounded overflow-hidden flex-md-row mb-2 shadow-sm h-md-250 position-relative">';

            echo '<div class="col p-2 d-flex flex-column position-static text-center titles-wrapper">';
            echo '<h4 class="mb-0 gap card-title">' . $project->getTitle() . '</h4>';
            echo '</div>';

            echo '</div>';
            echo '</div>';
        }
        echo '</>';
    }
}
?>