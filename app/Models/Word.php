<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Word extends Model
{
    use HasFactory;

    protected $table = 'words';
    protected $primary_key = 'id';

    protected $fillable = [
        'name',
        'definition_id'
    ];

    public function definition(): HasOne {
        return $this -> hasOne(Definition::class, 'definition_id');
    }

}
