@extends('layouts.app')
@section('title', 'lista do usuario')



@section('content')
    <h1>lista do usuario {{ $user->name }}</h1>
    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>

    </ul>
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit">deletar</button>

    </form>

@endsection
