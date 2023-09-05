<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Definition extends Model
{
    use HasFactory;

    protected $table = 'definitions';
    protected $primary_key = 'id';

    protected $fillable = [
        'definition_text',
        'word_id'
    ];

}
