<?php

namespace App\Models;

use App\Traits\DBConnection;
use App\Traits\Migration;

interface IBaseModel {

    public function read(): array;

    public function create(): bool;

    public function update(): bool;

    public function delete(): bool;


}

abstract class BaseModel implements IBaseModel
{
    use Migration;
    private string $table = '';

    public function __construct()
    {
    }





}