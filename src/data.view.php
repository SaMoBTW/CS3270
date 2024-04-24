<?php

$name = 'Samir Mahmoud';

$personalGitHub = 'https://github.com/SaMoBTW';

$siteRepo = 'https://github.com/SaMoBTW/CS3270';

$config = parse_ini_file('./config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
$APP_ROOT = $config[$environment]['APP_ROOT'];
$DB_NAME = $config[$environment]['APP_ROOT'];
$DB_HOST = $config[$environment]['APP_ROOT'];
$DB_USER = $config[$environment]['APP_ROOT']; 
$DB_PASS = $config[$environment]['APP_ROOT']; 

$navArray = [
    'Home',
    'Assignments',
    'About Me',
    'Personal Projects',
    'CS3270 Advanced Web Programming',
    'Resume',
    'Contact Me',
    'Admin',
];

$projects =
    [
        'tindog' =>
            [
                'title' => 'Tindog',
                'languages' => 'HTML, CSS, Bootstrap',
                'description' => "Just a simple single webpage made using Bootstrap.",
                'link' => "https://github.com/SaMoBTW/tindog",
                'image' => '/images/tindogSS.PNG'
            ],
        'simon' =>
            [
                'title' => 'Simon',
                'languages' => 'HTML, CSS, JavaScript',
                'description' => "A memory game based on the children's toy 'Simon'",
                'link' => "https://github.com/SaMoBTW/Simon-Game",
                'image' => '/images/simon.png'

            ],
        'banking' =>
            [
                'title' => 'Tindog',
                'languages' => 'HTML, CSS, Bootstrap, PHP',
                'description' => "A simple three page banking app where you can transfer money between your personal accounts.",
                'link' => "https://github.com/SaMoBTW/Banking-App",
                'image' => '/images/banking.png'
            ],
        'dolphins' =>
            [
                'title' => 'Dolphins',
                'languages' => 'HTML, CSS, Bootstrap, PHP, Water, Chum',
                'description' => "Everyone's Favorite fake Mammal.",
                'link' => "https://www.youtube.com/watch?v=dQw4w9WgXcQ",
                'image' => 'images/dolphins.jpg'
            ],
        'hippos' =>
            [
                'title' => 'Hippos',
                'languages' => 'HTML, CSS, Swamp, Django, Python',
                'description' => "Madagascar's finest.",
                'link' => "https://www.youtube.com/watch?v=GeyECB-DEGk",
                'image' => '/images/hippos.jpg'
            ],
    ];

class ProjectCard
{
    private $title;
    private $languages;
    private $description;
    private $link;
    private $image;

    public function __construct($title, $languages, $description, $link, $image)
    {
        $this->title = $title;
        $this->languages = $languages;
        $this->description = $description;
        $this->link = $link;
        $this->image = $image;
    }

    public function render()
    {
        echo '<div class="col-md-6">';
        echo '<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">';
        echo '<div class="col-auto d-none d-lg-block">';
        echo '<img src="' . $this->image . '" class="card-img-top" alt="...">';
        echo '</div>';
        echo '<div class="col p-4 d-flex flex-column position-static">';
        echo '<h3 class="mb-0 gap card-title">' . $this->title . '</h3>';
        echo '<p class="mb-1 text-muted gap left-margin">' . $this->languages . '</p>';
        echo '<h5 class="card-text mb-auto gap left-margin">' . $this->description . '</h5>';
        echo '<a href="' . $this->link . '" target="_blank" class="stretched-link btn-primary gap left-margin purple-text">Github Repo</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}

class ProjectCardRenderer
{
    private $projects;

    public function __construct($projects)
    {
        $this->projects = $projects;
    }

    public function renderProjectCards()
    {
        echo "<div class='row'>";
        foreach ($this->projects as $project) {
            $projectCard = new ProjectCard($project['title'], $project['languages'], $project['description'], $project['link'], $project['image']);
            $projectCard->render();
        }
        echo "</div>";
    }
}

// Login system

// Array to store users and passwords
$users = array(
    'samir' => 'madethesite',
    'justin' => 'likescountry',
    // Add more users as needed
);

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username and password are empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Check if the username exists in the array and if the password matches
        if (array_key_exists($username, $users) && $users[$username] === $password) {
            // Password is correct, so start a new session
            session_start();

            // Store data in session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;

            // Redirect user to home page
            header("location: home.php");
        } else {
            // Display an error message if username or password is incorrect
            $password_err = "The username or password you entered is incorrect.";
        }
    }
}


















?>
