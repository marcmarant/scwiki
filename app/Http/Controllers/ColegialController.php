<?php

namespace App\Http\Controllers;

use App\Models\Colegial;
use Illuminate\Http\Request;

class ColegialController extends Controller
{
    public function show($id)
    {
        $colegial = Colegial::with('cursos')->find($id);

        if (!$colegial) {
            return redirect()->route('colegiales.index')->with('error', 'Colegial no encontrado');
        }

        return view('colegiales.show', compact('colegial'));
    }
}