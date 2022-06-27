<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserControler extends Controller
{
    public function index()
    {
        $user = new  \stdClass();
        $user->name = 'Luís';
        $user->age = 28;

        $user2 = new  \stdClass();
        $user2->name = 'Luís';
        $user2->age = 28;

        $users = [
            $user, $user2
        ];

        var_dump($users);

        dd($users);
    }

    public function show(User $user)
    {
        return $user;
    }
}
