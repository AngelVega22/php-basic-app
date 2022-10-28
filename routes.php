<?php



// $router->define([
//     '' => 'controllers/index.controller.php',
//     'about' => 'controllers/about.controller.php',
//     'contact' => 'controllers/contact.controller.php',
//     'task' => 'controllers/task.controller.php'
// ]);

$router->get('', 'controllers/index.controller.php');
$router->get('about', 'controllers/about.controller.php');
$router->get('contact', 'controllers/contact.controller.php');

$router->post('task', 'controllers/task.controller.php');