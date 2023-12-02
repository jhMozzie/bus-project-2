<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function ProfessorDashboard()
    {
        // Lógica para el panel de control del profesor
        return view('professor.dashboard'); // Puedes ajustar esto según tu lógica y estructura de vistas
    }
}