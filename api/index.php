<?php

use App\Models\Posts;



require_once '../includes/core.php';


header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');


// $posts = new Posts();
// $res = $posts->read();

if ($_SERVER['REQUEST_URI'] === '/api/posts') {
    $posts = Posts::db()
        ->custom_query("SELECT * FROM posts")
        ->findAll();

    echo toJson($posts);

    
}

