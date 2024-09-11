<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@stack('styles')
</head>
<body>
@if (!Request::is('login'))
<nav class="navbar navbar-light bg-light px-2">
    <a class="navbar-brand" href="javascript:void(0)">
        <img src="{{ asset('logo.png') }}" height="30" class="d-inline-block align-top">
        Qstrike
    </a>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/factories">Factories</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/employees">Employees</a>
        </li>
        <li class="nav-item">
            <form class="m-0" action="/logout" method="post">
                @csrf
                <button class="nav-link" type="submit">Logout</button>
            </form>
        </li>
    </ul>
</nav>
@endif

@yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
