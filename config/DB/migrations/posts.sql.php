<?php

use Classes\DB;
require_once '../../../functions/Classes/DB.php';

$db = DB::getInstance(require '../db-config.php', 'mysql');

$db->custom_query("
CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    category_id INT NOT NULL,
    category_name VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    author VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL
);

");

