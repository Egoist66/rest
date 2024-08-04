<?php

namespace App\Traits;

trait Migration
{
    use DBConnection;

    public static function migrate(string $sql): void
    {
        self::db()->custom_query($sql);


    }

    public static function drop(string $table): void
    {
        self::db()->custom_query("DROP TABLE IF EXISTS $table");
    }
}