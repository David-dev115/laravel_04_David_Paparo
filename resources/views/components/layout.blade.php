<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>


<body>

    {{-- inizio nav --}}

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            {{-- Brand a sinistra --}}
            <a class="navbar-brand" href="{{ route('home') }}">Navbar</a>

            {{-- Toggler button (mobile) --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- Collapse con link centrati --}}
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('about-us') }}">Chi Siamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Servizi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- fine nav --}}

    {{-- inizio contenuto pagina --}}

                {{-- inserimento dinamico del contenuto --}}

                {{$slot}}


    {{-- fine contenuto pagina --}}


    {{-- inizio footer --}}


    <footer class="bg-dark text-white py-4 mt-auto">
        <div class="container text-center">
            {{-- Link alle pagine principali --}}
            <ul class="list-inline mb-2">
                <li class="list-inline-item">
                    <a href="{{ route('home') }}" class="text-white text-decoration-none">Home</a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ route('about-us') }}" class="text-white text-decoration-none">Chi Siamo</a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="text-white text-decoration-none">Servizi</a>
                </li>
            </ul>

            {{-- Testo copyright --}}
            <p class="mb-0">&copy; {{ date('Y') }} Laravel Blog. Tutti i diritti riservati.</p>
        </div>
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
