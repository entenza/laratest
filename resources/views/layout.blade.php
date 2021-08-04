<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $appTitle  }}</title>
    @stack('scripts')
</head>
<body>
    @section('arriba')
        <p>Esta es la seccion de arriba</p>
    @show


    <div class="container" style="background-color: yellow;">
            @yield('principal')
    </div>
    <div style="background-color: gray;">
        <span>{{ $footer ?? 'Default footer' }}</span>
    </div>
    
</body>
</html>