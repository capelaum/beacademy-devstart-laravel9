@extends('template.users')
@section('title', 'Listagem de Usuários')
@section('heading', 'Listagem de Usuários')

@section('main')

<div class="col-sm mt-2 mb-5 w-50">
    <form method="GET" action="{{ route('users.index') }}">
        <div class="input-group">
            <input class="form-control bg-dark text-white" type="search" name="search" id="search"
                value="{{ request()->search }}">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>
</div>

@if ($users->isEmpty())
<p>Não há usuários cadastrados 😕</p>
@else

<table class="table table-dark table-hover table-striped">
    <thead class="text-center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Avatar</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Postagens</th>
            <th scope="col">Data de Cadastro</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>
                <img src="{{ $user->image }}" alt="{{ $user->name }}" width="50px" height="50px" class="rounded-circle">
            </td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('user.posts', $user->id) }}" class="btn btn-success">
                    {{ $user->posts->count() }} Posts
                </a>
            </td>
            <td>{{ date('d/m/Y - H:i', strtotime($user->created_at)) }}</td>
            <td class="d-flex justify-content-center">
                <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary me-2">
                    Visualizar
                </a>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary me-2" role="button">
                    Editar
                </a>
                <form action="{{ route('users.delete', $user->id) }}" method="POSt" class="">
                    @method('DELETE')
                    @csrf

                    <button type="submit" class="btn btn-danger text-white" role="button">
                        Deletar
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="justify-content-center pagination">
    {{ $users->links('pagination::bootstrap-4') }}
</div>

@endif
@endsection
