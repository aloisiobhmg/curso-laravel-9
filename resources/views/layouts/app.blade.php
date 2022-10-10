<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }} ">


    @yield('css')
    <title> @yield('title') !</title>
</head>

<body>
    <div class="app">
        <div class="sidebar-container">
            <div class="sidebar-logo">
                MENU LATERAL
            </div>
            <ul class="sidebar-navigation">
                <li class="header">Navigation</li>
                <li>
                    <a href="{{ route('users.index') }}">
                        <i class="fa fa-home" aria-hidden="true"></i> Homepage
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
                    </a>
                </li>
                <li class="header">Another Menu</li>
                <li>
                    <a href="#">
                        <i class="fa fa-users" aria-hidden="true"></i> Friends
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-cog" aria-hidden="true"></i> Settings
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-info-circle" aria-hidden="true"></i> Information
                    </a>
                </li>
            </ul>
        </div>

        <div class="content-container">

            <div class="container-fluid">
                @yield('content')

            </div>

        </div>
    </div>



    {{-- <a href="{{ route('users.index') }}"><i class="fa fa-home fa-2x" aria-hidden="true"></i>
            </a>
            @yield('content') --}}



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    @yield('js')
</body>

</html>
