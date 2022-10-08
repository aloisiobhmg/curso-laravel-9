@extends('layouts.app')
@section('title', 'Novo Usuário')



@section('content')
    <h1>Novo Usuário</h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $erro)
                <li class="error">{{ $erro }}</li>
            @endforeach
        </ul>

    @endif

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <input type="text" name="name" id="" placeholder="Nome:" value="{{ old('name') }}">
        <input type="email" name="email" id="" placeholder="E-mail:"value="{{ old('E-mail') }}">
        <input type="password" name="password" id="" placeholder="Senha:">
        <button type="submit">enviar</button>
    </form>
@endsection
