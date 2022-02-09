<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Posty</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-100">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <a href="{{ route('home') }}" class="p-3">Home</a>
                </li>

                @if (auth()->user())
                <li>
                    <a href=" {{ route('dashboard') }} " class="p-3">Dashboard</a>
                </li>
                @endif

                <li>
                    <a href="" class="p-3">Post</a>
                </li>
            </ul>
            <ul class="flex items-center">
                @auth
                    <li>
                        <span class="p-3">Hi,&#32;{{ auth()->user()->name }}</span>
                    </li>

                    <li>
                        <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                @endauth

                @guest
                    <li>
                        <a href="{{ route('login') }}" class="p-3">Login</a>
                    </li>

                    <li>
                        <a href="{{ route('register') }}" class="p-3">Register</a>
                    </li>
                @endguest


            </ul>
        </nav>
        @yield('content')
    </body>
</html>