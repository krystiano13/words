<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    protected $table = 'words';
    protected $primary_key = 'id';

    protected $fillable = [
        'name',
    ];

    public function definition() {
        return $this -> hasOne(Definition::class,'word_id');
    }
    
}
