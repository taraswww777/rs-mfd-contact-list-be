<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupContacts extends Model
{
    use HasFactory;
    protected $table = 'group_contacts';

    // Массово назначаемые атрибуты.
    protected $fillable = [
        'name',
        'phone',
        'description',
        'created_at',
        'updated_at',
    ];

    // Поля показываемые по умолчанию
    protected $visible = [
        'id',
        'name',
        'phone',
        'description'
    ];

    // Поля скрываемые по умолчанию
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
