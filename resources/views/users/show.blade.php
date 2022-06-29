@extends('template.users')
@section('title', $user->id . ' - ' . $user->name)
@section('heading', 'Informações do Usuário')
@section('main')

<div class="card rounded-3 border border-1 border-secondary bg-dark" style="width: 300px;">
    <div class="card-body">
        <h1 class="card-title fs-3">{{ $user->name }}</h1>
        <a href="mailto:{{ $user->email }}" class="card-subtitle card-link text-info">{{ $user->email }}</a>
        <div class="mt-4">
            <strong class="card-text d-block">Data de criação:</strong>
            <span class="card-text">{{ date('d/m/Y - H:i', strtotime($user->created_at)) }}</span>
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary text-white mb-3 d-block" role="button">
            Editar
        </a>
        <form action="{{ route('users.delete', $user->id) }}" method="POSt">
            @method('DELETE')
            @csrf

            <button type="submit" class="btn btn-danger text-white d-block" style="width: 100%;" role="button">
                Deletar
            </button>
        </form>
    </div>
</div>

@endsection
