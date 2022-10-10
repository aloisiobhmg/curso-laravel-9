@extends('layouts.app')
@section('title')
    lista de usuarios
@endsection

@section('content')
    <h1>
        Lista de usuarios

        <a href="{{ route('users.create') }}">
            <i class="btn btn-outline-dark fa fa-user" aria-hidden="true">+</i>



        </a>
    </h1>

    <form action="{{ route('users.index') }}" method="get">
        <div class="row">

            <div class="col-2">
                <div class="input-group input-group-sm">
                    <input class="form-control" type="search" aria-label="Search" name="search" placeholder=""
                        aria-describedby="basic-addon1">

                    <div class="input-group-prepend"><button type="submit">
                            <span class="input-group-text"><span class="fa-solid fa-magnifying-glass fa-1x"></span></span>
                        </button>
                    </div>


                </div>
            </div>
        </div>

    </form>

    <table id="" class="table-hover table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th colspan="2" class="text-center">Açao </th>


            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>


                    <td style="width:100px"><a href="{{ route('users.show', ['id' => $user->id]) }}"><i
                                class="btn btn-outline-info fa fa-eye fa-0" aria-hidden="true"></i>
                        </a>
                    </td>
                    <td style="width:100px"><a href="{{ route('users.edit', ['id' => $user->id]) }}" class="glyphicon"><i
                                class="btn btn-outline-warning fa-solid fa-pen-to-square" aria-hidden="true"></i>
                        </a></td>


                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
