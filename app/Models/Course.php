<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function material(){
        return $this->belongsTo(Material::class);
    }
    
    public function questions(){
        return $this->hasMany(Question::class);
    }
}
