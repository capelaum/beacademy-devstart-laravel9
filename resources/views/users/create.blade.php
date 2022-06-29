@extends('template.users')
@section('title', 'Cadastrar Usuário')
@section('heading', 'Cadastrar Usuário')
@section('main')

@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach
@endif

<form method="POST" action="{{ route('users.save') }}">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control bg-dark text-white" id="name" name="name" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control bg-dark text-white" id="email" name="email">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" class="form-control bg-dark text-white" id="password" name="password" required>
    </div>


    <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
</form>
@endsection
