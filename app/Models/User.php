<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'age',
        'bio'
    ];
    public function blog(){
        return $this->hasMany(Blog::class);
    }
}
