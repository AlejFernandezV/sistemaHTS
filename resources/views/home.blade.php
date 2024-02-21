<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/index_styles.css') }}" rel="stylesheet">

    <title>Sistema FTA</title>
</head>
<body>
    <header class="p-3">
        <div class="container">
            <div class="d-flex align-items-center">
                <img src="{{ asset('images/logo_fta.png') }}" alt="LogoFTA" class="me-3" width="50">
                <a href="https://www.fac.mil.co" target="_blank" style="text-decoration:none;">
                    <h1 class="titulo h3 mb-0">FUERZA AEROESPACIAL <br> COLOMBIANA</h1>
                </a>
                <button class="btn btn-primary ms-auto" onclick="window.location.href='{{ url('/app') }}'">Lanzar APP</button>
            </div>
        </div>
    </header>

    <main>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="display-4 subtitulo">Análisis de Árbol de Fallas</h2>
                    <p class="descripcion lead">
                        Realice un análisis de árbol de fallas de forma rápida y sencilla con este módulo.
                    </p>
                </div>
                <div class="col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/diagrama1.png') }}" class="img-fluid mx-auto" alt="Imagen 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/diagrama2.png') }}" class="img-fluid mx-auto" alt="Imagen 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/diagrama3.png') }}" class="img-fluid mx-auto" alt="Imagen 3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="p-3 text-center">
        <div class="container">
            <img class="logo-faec" src="{{ asset('images/logo_faec.png') }}" alt="Logo FAEC">
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
