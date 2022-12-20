<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    public function Credito(){
        return $this->belongsTo(Credito::class);
    }

    public function AreaConocimiento(){
        return $this->belongsTo(AreaConocimiento::class);
    }

    public function TipoMateria(){
        return $this->belongsTo(TipoMateria::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
