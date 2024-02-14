<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])

</head>

<body>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="/">USERS CONTROL</a>
    <div class="d-flex justify-content-center col-md-6">
        <a href="/register" class="btn btn-primary">Registrar Usuarios</a>
    </div>
</nav>

<main class="py-4">
    @yield('content')
</main>


    
</body>

</html>
