<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class roomview extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'name',
        'roomviewid'
    ];

    protected $table = 'room_view';
}
