@extends('layouts.app')
@section('title', "Comentários do Usuário {$user->name}")



@section('content')
    <h1>Comentários do Usuário {{ $user->name }}</h1>
    (<a href="{{ route('comments.create', $user->id) }}">+</a>)

    @foreach ($comments as $comment)
        <ul>
            <li>{{ $comment->body }}</li>
            <li>{{ $comment->visible ? 'sim' : 'não' }}</li>
            <li>anotações (0)</li>
        </ul>
    @endforeach



    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit">deletar</button>

    </form>

@endsection
