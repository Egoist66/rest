<?php

namespace App\Models;

class Posts extends BaseModel
{

    private string $table = 'posts';

    public string $id;
    public string $title;
    public int $category_id;
    public string $category_name;
    public string $body;
    public string $author;
    public string $created_at;
    public ?string $updated_at;



    /**
     * @return array<Posts>
     *  Get all posts
     */
    final public function read(): array
    {
        return self::db()->custom_query('SELECT * FROM posts')->findAll();
    }

    final public function create(): bool
    {
        // TODO: Implement create() method.
    }

    final public function update(): bool
    {
        // TODO: Implement update() method.
    }

    final public function delete(): bool
    {
        // TODO: Implement delete() method.
    }
}



