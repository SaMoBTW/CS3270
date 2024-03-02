<?php

$name = 'Samir Mahmoud';

$personalGitHub = 'https://github.com/SaMoBTW';

$siteRepo = 'https://github.com/SaMoBTW/CS3270';

$config = parse_ini_file('config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
$APP_ROOT = $config[$environment]['APP_ROOT'];

$navArray = [
    'Home',
    'Assignments',
    'About Me',
    'Personal Projects',
    'CS3270 Advanced Web Programming',
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

?>
