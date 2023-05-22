<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class room extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'roomid',
        'roomname',
        'square',
        'roomviewid'
    ];

    protected $table = 'room';
}
