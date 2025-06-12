<?php

return [
    // Rutas de usuario
    '/' => ['controller' => 'UsuarioController', 'method' => 'login'],
    '/registrar' => ['controller' => 'UsuarioController', 'method' => 'registe'],
    '/inicio' => ['controller' => 'HomeController', 'method' => 'index'],
    '/usuarios' => ['controller' => 'UsuarioController', 'method' => 'index'],
    '/usuario/crear' => ['controller' => 'UsuarioController', 'method' => 'create'],
    '/usuario/mostrar/{id}' => ['controller' => 'UsuarioController', 'method' => 'show'],
    '/usuario/eliminar/{id}' => ['controller' => 'UsuarioController', 'method' => 'delete'],
    // Rutas de libros
    '/libros' => ['controller' => 'LibroController', 'method' => 'index'],
    '/libro/crear' => ['controller' => 'LibroController', 'method' => 'create'],
    '/libro/mostrar/{id}' => ['controller' => 'LibroController', 'method' => 'show'],
    '/libro/eliminar/{id}' => ['controller' => 'LibroController', 'method' => 'delete'],
];
