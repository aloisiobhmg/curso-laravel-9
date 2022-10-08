@extends('layouts.app')
@section('title', 'Editar Usuário')



@section('content')
    <h1>Editar Usuário {{ $user->name }}</h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $erro)
                <li class="error">{{ $erro }}</li>
            @endforeach
        </ul>

    @endif

    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" id="" placeholder="Nome:" value="{{ $user->name }}">
        <input type="email" name="email" id="" placeholder="E-mail:"value="{{ $user->email }}">
        <input type="password" name="password" id="" placeholder="Senha:">
        <button type="submit">enviar</button>
    </form>
@endsection
