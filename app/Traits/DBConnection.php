<?php

namespace App\Traits;

use Classes\DB;

trait DBConnection {
    /**
     * @return DB
     * Returns DB instance and configures it
     */
    public static function db(): DB {
        return DB::getInstance(
            require APP_ROOT.DS.'config'.DS.'DB'.DS.'db-config.php',
            'mysql'
        );
    }
}