@extends('layouts.app')
@section('title', 'Editar Usuário')



@section('content')
    <div>
        <h1 class="my-3">Editar Usuário </h1>
        @include('includes.validations-form')


        <form action="{{ route('users.update', $user->id) }}" method="post">
            @method('PUT')
            @include('users._partials.form')
        </form>
    </div>
@endsection
