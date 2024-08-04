<?php

return [
    'mysql' => [
        'host' => 'localhost',
        'dbname' => '',
        'username' => '',
        'password' => '',
        'charset' => '',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    ]
];