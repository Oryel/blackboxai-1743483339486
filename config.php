<?php
// Site-wide configuration
define('SITE_TITLE', 'Roadmap Hub');
define('ASSETS_URL', '/assets/');

// Error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Session management
session_start();

// Roadmap data
$roadmaps = [
    1 => [
        'title' => 'Full Stack Web Development',
        'description' => 'Learn HTML/CSS, JavaScript, and backend frameworks',
        'image' => 'https://images.pexels.com/photos/577585/pexels-photo-577585.jpeg',
        'difficulty' => 'Intermediate',
        'steps' => [
            ['title' => 'Learn HTML/CSS', 'resources' => ['MDN Web Docs', 'FreeCodeCamp']],
            ['title' => 'Master JavaScript', 'resources' => ['Eloquent JavaScript', 'JavaScript.info']],
            ['title' => 'Backend Development', 'resources' => ['Node.js', 'Express']]
        ]
    ],
    2 => [
        'title' => 'Data Science',
        'description' => 'Master Python, statistics, and machine learning',
        'image' => 'https://images.pexels.com/photos/590016/pexels-photo-590016.jpeg',
        'difficulty' => 'Advanced',
        'steps' => [
            ['title' => 'Learn Python', 'resources' => ['Python Crash Course']],
            ['title' => 'Statistics Fundamentals', 'resources' => ['Think Stats']],
            ['title' => 'Machine Learning', 'resources' => ['Scikit-learn', 'TensorFlow']]
        ]
    ]
];

// Error handler
function customError($errno, $errstr) {
    echo "<b>Error:</b> $errstr<br>";
    die();
}
set_error_handler("customError");
?>