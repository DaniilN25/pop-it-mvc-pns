<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class room extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'room_view',
        'room_name',
        "square"
    ];

    protected $table = 'room';
}
