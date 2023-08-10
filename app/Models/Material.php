<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    public function field(){
        return $this->belongsTo(Field::class);
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }

    public function courses(){
        return $this->hasMany(Course::class);
    }
}
