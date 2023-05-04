<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class workers extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'id',
        'name',
        "date_of_birth",
        'divisions_view',
        'divisions_name',
        'room_view'
    ];

    protected $table = 'workers';
}
