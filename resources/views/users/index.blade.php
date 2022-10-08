@extends('layouts.app')
@section('title')
    lista de usuarios
@endsection

@section('content')
    <h1>
        lista de usuarios
        (<a href="{{ route('users.create') }}">+</a>)
    </h1>
    <form action="{{ route('users.index') }}" method="get">
        <input type="text" name="search" placeholder="Pesquisar">
        <button>Pesquisar</button>
    </form>
    <ul>
        @foreach ($dados as $dado)
            <li>
                {{ $dado->name }}-
                {{ $dado->email }}
                | <a href="{{ route('users.edit', ['id' => $dado->id]) }}">editar</a>
                | <a href="{{ route('users.show', ['id' => $dado->id]) }}">detalhes</a>

            </li>
        @endforeach
    </ul>
@endsection
