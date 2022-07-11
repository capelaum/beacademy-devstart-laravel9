<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $user;
    protected $post;

    public function __construct(User $user, Post $post)
    {
        $this->user = $user;
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->all();

        return view('posts.index', compact('posts'));
    }

    public function userPosts(User $user)
    {
        $user->image = $this->user->getUserAvatarPath($user);

        $posts = $user->posts;

        return view('posts.user', compact('user', 'posts'));
    }
}
