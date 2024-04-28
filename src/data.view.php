<?php

$name = 'Samir Mahmoud';

$personalGitHub = 'https://github.com/SaMoBTW';

$siteRepo = 'https://github.com/SaMoBTW/CS3270';

$config = parse_ini_file('C:\Users\SaMo\Documents\GitHub\CS3270\config.ini', true);
if ($config === false) {
    die('Error: Unable to parse config.ini file');
}
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
$APP_ROOT = $config[$environment]['APP_ROOT'];
// $DB_NAME = $config[$environment]['DB_NAME'];
// $DB_HOST = $config[$environment]['DB_HOST'];
// $DB_USER = $config[$environment]['DB_USER']; 
// $DB_PASS = $config[$environment]['DB_PASS'];

include_once ('getposts.php');
include_once ('gettitles.php');
include_once ('getmessages.php');

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




