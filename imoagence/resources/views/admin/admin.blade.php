<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Administration</title>
    <link rel="stylesheet" href="/build/assets/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container mt-5">
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif    
        @yield('content')
    </div>

<script src="/build/assets/js/bootstrap1.min.js"></script>
<script src="/build/assets/js/script.js"></script>
</body>
</html>