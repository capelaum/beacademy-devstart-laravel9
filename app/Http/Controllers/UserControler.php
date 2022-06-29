<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserControler extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index()
    {
        $users = User::all()->sortByDesc('id');

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

    public function create()
    {
        return view('users.create');
    }

    public function save(Request $request)
    {
        // $user = new User;
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = bcrypt($request->password);
        // $user->save();

        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $this->model->create($data);

        return redirect()->route('users.index');
    }
}
