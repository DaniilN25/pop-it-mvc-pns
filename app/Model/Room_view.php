<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class room_view extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'name',
        'room_view_id'
    ];

    protected $table = 'room_view';
}
