@extends('template.users')
@section('title', "{$user->id} | Listagem de Posts")
@section('heading', "Listagem de Posts de {$user->name}")
@section('main')

<h2>Autor</h2>
<div class="mt-4 d-inline-flex flex-column justify-content-center align-items-center border rounded gap-3 p-4">
    <img src="{{ $user->image }}" alt="{{ $user->name }}" width="50px" height="50px" class="rounded-circle">
    <span>{{ $user->name }}</span>
    <span>{{ $user->email }}</span>
</div>

@if ($posts->isEmpty())
<p>Não há Posts cadastrados 😕</p>

@else

<h2 class="mt-5">Posts</h2>

<table class="table table-dark table-hover table-striped">
    <thead class="text-center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Título</th>
            <th scope="col">Conteúdo</th>
            <th scope="col">Status</th>
            <th scope="col">Data de Criação</th>
        </tr>
    </thead>
    <tbody class="text-center">

        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td style="max-width: 450px">{{ $post->content }}</td>
            <td>@if($post->active) Ativo @else Inativo @endif</td>
            <td>{{ date('d/m/Y - H:i', strtotime($post->created_at)) }}</td>
        </tr>

        @endforeach
    </tbody>
</table>

@endif



@endsection
