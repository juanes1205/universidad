<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrarMateria extends Model
{
    use HasFactory;

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Materia(){
        return $this->belongsTo(Materia::class);
    }
}
