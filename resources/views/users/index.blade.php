@extends('template.users')
@section('title', 'Listagem de Usuários')
@section('heading', 'Listagem de Usuários')
@section('main')

@if ($users->isEmpty())
<p>Não há usuários cadastrados 😕</p>
@else

<table class="table table-dark table-hover table-striped">
    <thead class="text-center">
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Data de Cadastro</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ date('d/m/Y - H:i', strtotime($user->created_at)) }}</td>
            <td>
                <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">
                    Visualizar
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection
