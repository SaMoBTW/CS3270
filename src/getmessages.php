<?php
  include_once("dbconnect.php");

class Message {
    private $senderName;
    private $senderEmail;
    private $senderMessage;

    public function __construct($senderName, $senderEmail, $senderMessage) {
        $this->senderName = $senderName;
        $this->senderEmail = $senderEmail;
        $this->senderMessage = $senderMessage;
    }

    public function getSenderName() {
        return $this->senderName;
    }

    public function getSenderEmail() {
        return $this->senderEmail;
    }

    public function getSenderMessage() {
        return $this->senderMessage;
    }
}

class MessageManager {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getMessages() {
        $showTable = "SELECT * FROM Messages";
        $stmt = $this->conn->query($showTable)->fetchAll(PDO::FETCH_ASSOC);
        $submissions = [];

        foreach ($stmt as $row) {
            $submission = new Message($row["name"], $row["email"], $row["message"]);
            $submissions[] = $submission;
        }

        return $submissions;
    }

    public function displayMessages() {
        $submissions = $this->getMessages();

        echo '<div class="row">';

        foreach ($submissions as $submission) {
            echo '<div class="col-md-3">';
            echo '<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">';
            echo '<div class="feedback-input ">';
            echo '  <p class="">'.$submission->getSenderName().'</p>';
            echo '  <p class="">'.$submission->getSenderEmail().'</p>';
            echo '  <p class="">'.$submission->getSenderMessage().'</p>';
            echo '</div>';

            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    }
}


?>