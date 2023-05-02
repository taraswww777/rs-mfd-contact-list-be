<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $table = 'favorite_contacts';

    // Поля показываемые по умолчанию
    protected $visible = [
        'id',
        'contactId',
    ];

    // Поля скрываемые по умолчанию
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
