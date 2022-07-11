@extends('template.users')
@section('title', 'Listagem de Posts')
@section('heading', 'Listagem de Posts')
@section('main')

@if ($posts->isEmpty())
<p>Não há Posts cadastrados 😕</p>
@else

<h2>Posts</h2>

<table class="table table-dark table-hover table-striped">
    <thead class="text-center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Usuário</th>
            <th scope="col">Título</th>
            <th scope="col">Conteúdo</th>
            <th scope="col">Data de Criação</th>
        </tr>
    </thead>
    <tbody class="text-center">

        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->user->name }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>{{ date('d/m/Y - H:i', strtotime($post->created_at)) }}</td>
        </tr>

        @endforeach
    </tbody>
</table>

@endif



@endsection
