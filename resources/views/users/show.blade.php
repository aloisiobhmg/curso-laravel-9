@extends('layouts.app')
@section('title', 'lista do usuario')
@section('css')

    <STyle>
        .center {
            width: 20%;
            text-align: center;
            a
        }
    </STyle>
@endsection


@section('content')

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://www.w3schools.com/tags/img_girl.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <p class="card-text">Nome: {{ $user->name }}</p>
                    <p class="card-text">E-mail: {{ $user->email }}</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <button type="submit" class="btn btn-outline-danger">Deletar</button>
                </div>
            </div>
        </div>
    </div>

@endsection
