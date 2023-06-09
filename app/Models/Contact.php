<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    // Массово назначаемые атрибуты.
    protected $fillable = [
        'name',
        'phone',
        'photo',
        'birthday',
        'address',
        'created_at',
        'updated_at',
    ];


    // Поля показываемые по умолчанию
    protected $visible = [
        'id',
        'name',
        'phone',
        'photo',
        'birthday',
        'address',
    ];

    // Поля скрываемые по умолчанию
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
