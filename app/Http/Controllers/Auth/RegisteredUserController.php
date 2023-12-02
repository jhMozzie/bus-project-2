<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'dni' => ['required', 'numeric', 'digits:8'], // DNI debe tener 8 caracteres numéricos
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'phone' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'dni' => $request->dni, // Asegúrate de que estos campos existan en tu formulario
            'email' => $request->email,
            'phone' => $request->phone, // Asegúrate de que estos campos existan en tu formulario
            'password' => Hash::make($request->password),
            'user_type_id' => 1, // Asigna un valor predeterminado o el valor correcto.
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/student/dashboard');
    }

}
