<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FakeInsta - @yield('titulo')</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wh+yl+TZB+Yq+Z/cNT+GPyMbXQc2+WD1OxxE4MhzWdtDSpyaQ/ax1zKlhB7JmGSy" crossorigin="anonymous">
        <!-- CSS -->
        <link href="style.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <header class="py-3 border-bottom bg-white shadow-sm">
            <div class="container d-flex justify-content-between align-items-center">
                <h1 class="h3 font-weight-bold">
                    FakeInsta
                </h1>
                <div class="d-flex gap-2 align-items-right">
                    <a class="fw-bold text-uppercase" href="#">Login</a>
                    <a class="fw-bold text-uppercase" href="/account">Crear Cuenta</a>
                </nav>
            </div>
        </header>
        <main class="container mt-5">
            <h2 class="fw-bold text-center display-5">
                @yield('titulo')
            </h2>
            <hr>
            @yield('contenido')
        </main>
        <footer class="fw-bold text-center py-3">
            FakeInsta todos los derechos reservados {{now()->year}}
        </footer>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeo6KZ+z9AF1AWMlF97jGupDqw0W1s1Vb/aivzvA0rO0BMHZ" crossorigin="anonymous"></script>
    </body>
</html>
