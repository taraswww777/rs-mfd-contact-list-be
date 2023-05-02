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
//"id": 2,
//"name": "Sydnee Langosh",
//"phone": "980-665-1768",
//"photo": "/images/id-576-200-300.jpg",
//"birthday": "2023-05-02",
//"address": "Apt. 964",
//"created_at": "2023-05-02T17:00:46.000000Z",
//"updated_at": "2023-05-02T17:00:55.000000Z"
}
