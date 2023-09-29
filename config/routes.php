<?php

$routes = [
    '' => [
        'controller' => 'HomeController',
        'action' => 'index'
    ],
    'login' => [
        'controller' => 'UserController',
        'action' => 'loginUser'
    ],
    'register' => [
        'controller' => 'UserController',
        'action' => 'registerUser'
    ],
    'dashboard' => [
        'controller' => 'UserController',
        'action' => 'showUserDashboardPage'
    ],
    'cars' => [
        'controller' => 'CarController',
        'action' => 'showCarsPage'
    ],
    'car/details' => [
        'controller' => 'CarController',
        'action' => 'showCarsDetails'
    ]
];