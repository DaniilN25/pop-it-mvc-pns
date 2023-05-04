<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class divisions_view extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'view',
        'name'
    ];

    protected $table = 'divisions_view';
}
