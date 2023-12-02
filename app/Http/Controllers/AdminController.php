<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        // Lógica para el panel de control del profesor
        return view('admin.dashboard'); // Puedes ajustar esto según tu lógica y estructura de vistas
    }

    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }
}
