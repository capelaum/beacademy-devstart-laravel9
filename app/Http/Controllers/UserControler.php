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

    public function edit(string $id)
    {
        $user = $this->model->find($id);

        if (!$user) {
            return redirect()->route('users.index');
        }

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $user = $this->model->find($id);

        if (!$user) {
            return redirect()->route('users.index');
        }

        $data = $request->only('name', 'email');

        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);

        return view('users.show', compact('user'));
    }

    public function delete(string $id)
    {
        $user = $this->model->find($id);

        if (!$user) {
            return redirect()->route('users.index');
        }

        $user->delete();

        return redirect()->route('users.index');
    }
}
