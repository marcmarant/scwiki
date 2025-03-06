<?php

namespace App\Models;

use App\Models\BaseModel;

class Curso extends BaseModel
{
    protected $table = 'curso';
    protected $primaryKey = 'id';

    public function colegiales()
    {
        return $this->belongsToMany(Colegial::class, 'colegial_curso', 'cursoid', 'colegialid');
    }
}
