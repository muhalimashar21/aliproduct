<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    use HasFactory;

    protected $table = 'numbers';
    public $timestamps = true;

    protected $fillable = [
        'number_id',
        'number',
        'number_available',
        'created_at',
        'update_at'
    ];
}
