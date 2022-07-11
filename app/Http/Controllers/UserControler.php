<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\SaveUpdateUserFormRequest;

class UserControler extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index()
    {
        //sort by desc id and paginate users
        $users = $this->model->orderBy('id', 'desc')->paginate(5);

        foreach ($users as $user) {
            $user->image = User::getUserAvatarPath($user);
        }

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

    public function store(SaveUpdateUserFormRequest $request)
    {
        $data = $request->validated();

        $data['password'] = bcrypt($request->password);

        if ($request['image']) {
            $image = $request['image'];
            $path = $image->store('profile', 'public');
            $data['image'] = $path;
        }

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

    public function update(SaveUpdateUserFormRequest $request, string $id)
    {
        $user = $this->model->find($id);

        if (!$user) {
            return redirect()->route('users.index');
        }

        $data = $request->only('name', 'email');

        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }

        if ($request['image']) {
            $image = $request['image'];
            $path = $image->store('profile', 'public');
            $data['image'] = $path;
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
