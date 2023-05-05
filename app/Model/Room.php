<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class room extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'room_id',
        'room_name',
        'square',
        'room_view_id'
    ];

    protected $table = 'room';
}
