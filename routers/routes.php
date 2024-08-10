<?php

return [
    'GET' => [
        'area' => 'AreaController@QueryAllController', // Nueva ruta para obtener todos los registros
        'area/(\d+)' => 'AreaController@QueryOneController',
        // Define más rutas GET aquí
    ],
    'POST' => [
        'area' => 'AreaController@InsertController',
        // Define más rutas POST aquí
    ],
    'PUT' => [
        'area/(\d+)' => 'AreaController@UpdateController',
        // Define más rutas PUT aquí
    ],
    'DELETE' => [
        'area/(\d+)' => 'AreaController@DeleteController',
        // Define más rutas DELETE aquí
    ],
];
