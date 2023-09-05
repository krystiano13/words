<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Definition extends Model
{
    use HasFactory;

    protected $table = 'definitions';
    protected $primary_key = 'id';

    protected $fillable = [
        'definition_text'
    ];
}
