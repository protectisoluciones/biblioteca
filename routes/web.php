<?php

return [
    '/' => ['controller' => 'UsuarioController', 'method' => 'login'],
    '/registrar' => ['controller' => 'UsuarioController', 'method' => 'registe'],
    '/inicio' => ['controller' => 'HomeController', 'method' => 'index'],
    '/usuarios' => ['controller' => 'UsuarioController', 'method' => 'index'],
    '/usuario/crear' => ['controller' => 'UsuarioController', 'method' => 'create'],
    '/usuario/mostrar/{id}' => ['controller' => 'UsuarioController', 'method' => 'show'],
    '/usuario/eliminar/{id}' => ['controller' => 'UsuarioController', 'method' => 'delete'],
];