<?php

/**
 * Point d'entré de l'application (site), "Front controller"
 */

session_start();

$page = $_GET['page'] ?? 'home';

$routes = [
    'home' => '/src/view/home.php',
    'round' => '/src/view/round.php',
    'round_res' => '/src/view/round_res.php',
    'end_game' => '/src/view/end_game.php'
];

// Vérif de la route
if (array_key_exists($page, $routes)) {
    include_once $routes[$page];
} else {
    // si pas trouver redirge vers le home
    header('Location: index.php?page=home');
    exit();
}

?>