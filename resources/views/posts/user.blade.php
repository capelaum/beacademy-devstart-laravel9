@extends('template.users')
@section('title', "{$user->id} | Listagem de Posts")
@section('heading', 'Listagem de Posts')
@section('main')

<h2>Autor</h2>
<table class="table table-dark table-hover table-striped">
    <thead class="text-center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Avatar</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <tr>
            <td>{{ $user->id }}</td>
            <td>
                <img src="{{ $user->image }}" alt="{{ $user->name }}" width="50px" height="50px" class="rounded-circle">
            </td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>

        </tr>
    </tbody>
</table>

@if ($posts->isEmpty())
<p>Não há Posts cadastrados 😕</p>

@else

<h2>Posts</h2>

<table class="table table-dark table-hover table-striped">
    <thead class="text-center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Título</th>
            <th scope="col">Conteúdo</th>
            <th scope="col">Data de Criação</th>
        </tr>
    </thead>
    <tbody class="text-center">

        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td style="max-width: 500px">{{ $post->content }}</td>
            <td>{{ date('d/m/Y - H:i', strtotime($post->created_at)) }}</td>
        </tr>

        @endforeach
    </tbody>
</table>

@endif



@endsection
