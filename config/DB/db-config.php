<?php
return [
    'db' => [
        'mysql' => [
            'host' => 'localhost',
            'dbname' => 'rest_api',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true
            ]
        ]
    ]
];