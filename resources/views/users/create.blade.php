@extends('template.users')
@section('title', 'Novo Usuários')
@section('heading', 'Cadastrar Usuário')
@section('main')

<form method="POST" action="{{ route('users.save') }}">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection