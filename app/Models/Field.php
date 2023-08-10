<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function users(){
        return $this->hasMany(User::class);
    }

    public function materials(){
        return $this->hasMany(Material::class);
    }
}
