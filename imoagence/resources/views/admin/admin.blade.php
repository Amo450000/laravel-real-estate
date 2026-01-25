<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Administration</title>
    <link rel="stylesheet" href="/build/assets/css/bootstrap.min.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">Agence</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbaeNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle Navigation">

                <span class="navbar-toggler-icon"></span>
            </button>

            @php
                $route = request()->route()->getName();
            @endphp

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('admin.property.index') }}" @class(['nav-link', 'active' => str_contains($route, 'property')])>Gérer les biens</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.option.index') }}" @class(['nav-link', 'active' => str_contains($route, 'option')])>Gérer les options</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <div class="container mt-5">
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif   
        
        @if($errors->any())

            <div class="alert alert-danger">
                <ul class="my-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif


        @yield('content')
    </div>

<script src="/build/assets/js/bootstrap1.min.js"></script>
<script src="/build/assets/js/script.js"></script>
</body>
</html>