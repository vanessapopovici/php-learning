<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    '/Practice/proj2/' => 'controllers/index.php',
    '/Practice/proj2/index.php' => 'controllers/index.php',

    '/Practice/proj2/about.php' => 'controllers/about.php',
    '/Practice/proj2/about' => 'controllers/about.php',

    '/Practice/proj2/notes.php' => 'controllers/notes.php',
    '/Practice/proj2/notes' => 'controllers/notes.php',
    
    '/Practice/proj2/note.php' => 'controllers/note.php',
    '/Practice/proj2/note' => 'controllers/note.php',

    '/Practice/proj2/contact.php' => 'controllers/contact.php',
    '/Practice/proj2/contact' => 'controllers/contact.php'
];


function routeToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require ($routes[$uri]);
    } else {
        abort();
    }
}
function abort($code = 404){
    http_response_code($code);
    
    require("views/{$code}.php");

    die();
}

routeToController($uri, $routes);