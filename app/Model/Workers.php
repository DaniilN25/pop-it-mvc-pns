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
        'birthday',
        'division_id',
        'room_id'
    ];

    protected $table = 'workers';
}
