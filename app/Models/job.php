<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'title 1',
                'salary' => '1'
            ],
            [
                'id' => 2,
                'title' => 'title 2',
                'salary' => ' 2'
            ],
        ];
    }
}
