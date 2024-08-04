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
     *  Gets all posts
     */
    final public function read(): array
    {
        $query = "SELECT
            c.name as category_name,
            p.id,
            p.category_id,
            p.title,
            p.body,
            p.author,
            p.created_at,
            p.updated_at
            FROM {$this->table}
            LEFT JOIN categories c ON p.category_id = c.id
            ORDER BY p.created_at DESC
        ";
        $stmt = self::db()->connection->prepare($query);

        return $stmt->fetchAll();
        
            
    }

    /**
     * Create a new record.
     *
     * @return bool Returns true if the record was successfully created, false otherwise.
     */
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



