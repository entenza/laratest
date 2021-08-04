<html>
    <body>
        <h3>Hello, {{ $name }}</h3>
        <h2>{{ $minombre }}</h2>
        <h4>Cantidad de Friends (composer) {{ $countOfFriends }}</h4>
        <h4>Cantidad de Amigos (creator) {{ $countOfAmigos }}</h4>

        @if ($countOfAmigos != 3)
            <span>al parecer no tiene tres amigos</span>
        @endif
        @unless (Auth::check())
            <p>No estas autenticado</p>
        @endunless
        @yield('sidebar')
    </body>
</html>