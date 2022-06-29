@extends('template.users')
@section('title', $user->id . ' - ' . $user->name)
@section('heading', 'Informações do Usuário')
@section('main')

<div class="card rounded-3 border border-1" style="width: 300px;">
    <div class="card-body">
        <h1 class="card-title fs-3">{{ $user->name }}</h1>
        <a href="mailto:{{ $user->email }}" class="card-subtitle card-link text-primary">{{ $user->email }}</a>
        <div class="mt-4">
            <strong class="card-text d-block">Data de criação:</strong>
            <span class="card-text">{{ $user->created_at }}</span>
        </div>
    </div>
    <div class="card-footer">
        <a href="#" class="btn btn-primary text-white" role="button">
            Editar
        </a>
        <a href="#" class="btn btn-danger text-white" role="button">
            Deletar
        </a>
    </div>
</div>

@endsection
