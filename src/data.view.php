<?php
include_once ('getposts.php');
include_once ('gettitles.php');
$name = 'Samir Mahmoud';

$personalGitHub = 'https://github.com/SaMoBTW';

$siteRepo = 'https://github.com/SaMoBTW/CS3270';

$config = parse_ini_file('./config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
$APP_ROOT = $config[$environment]['APP_ROOT'];
// $DB_NAME = $config[$environment]['DB_NAME'];
// $DB_HOST = $config[$environment]['DB_HOST'];
// $DB_USER = $config[$environment]['DB_USER']; 
// $DB_PASS = $config[$environment]['DB_PASS'];

$navArray = [
    'Home',
    'Assignments',
    'About Me',
    'Personal Projects',
    'CS3270 Advanced Web Programming',
    'Resume',
    'Contact Me',
    'Admin',
    'Weather'
];


?>




