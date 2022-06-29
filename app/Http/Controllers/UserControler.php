<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserControler extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function show(string $id)
    {
        $user = User::find($id);
        // $user = User::findOrFail($id);
        // $user = User::where('id', $id)->first();

        if (!$user) {
            return redirect()->route('users.index');
        }

        return view('users.show', compact('user'));
    }
}
