<?php

namespace App\Models;

use App\Models\BaseModel;

class Colegial extends BaseModel
{
    protected $table = 'colegial';
    protected $primaryKey = 'id';
    protected $keyType = 'string';

    public function cursos()
    { return $this
        ->belongsToMany(Curso::class, 'colegial_curso', 'colegialid', 'cursoid')
        ->withPivot('habitacion', 'estudio', 'foto');
    }
}
