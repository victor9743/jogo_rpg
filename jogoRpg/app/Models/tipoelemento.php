<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoelemento extends Model
{
    use HasFactory;

    protected $casts=[
        'items' => 'array'
    ];

    protected $dates = ['date'];
}
