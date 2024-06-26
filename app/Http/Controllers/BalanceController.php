<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class BalanceController extends Controller
{
    // Añadir saldo inicial
    public function update(Request $request)
    {
        $request->validate([
            'initial-balance' => 'required|numeric|min:0'
        ]);

        $user = new User();

        $user = Auth::user();
        $user->balance += $request->input('initial-balance');
        $user->save();

        return back()->with('success', 'Saldo añadido correctamente.');
    }

    // Editar saldo
    public function edit(Request $request)
{
    $request->validate([
        'new-balance' => 'required|numeric|min:0'
    ]);

    $user = Auth::user();

    $user->balance = $request->input('new-balance');
    $user->save();

    return back()->with('success', 'Saldo actualizado correctamente.');
}
}
