<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function StudentDashboard()
    {
        // Lógica para el panel de control del estudiante
        return view('student.dashboard'); // Puedes ajustar esto según tu lógica y estructura de vistas
    }
}