<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App FTA</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/app_styles.css') }}" rel="stylesheet">
</head>
<body>
    <div class="logo-container">
        <img src="{{ asset('images/logo_faec.png') }}" alt="Logo" class="logo">
    </div>

    <div class="sidebar">
        <ul class="list-unstyled">
            <li><a href="{{ url('/') }}" data-tooltip="Home" class="material-symbols-outlined">home</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#WIPmodal" data-tooltip="Buscar" class="material-symbols-outlined">search</a></li>
        </ul>
        <ul class="list-unstyled mt-auto">
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#WIPmodal" data-tooltip="Perfil" class="material-symbols-outlined">account_circle</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#WIPmodal" data-tooltip="Configuración" class="material-symbols-outlined">settings</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#WIPmodal" data-tooltip="Ayuda" class="material-symbols-outlined">help</a></li>
        </ul>
    </div>

    <div class="workspace">

    </div>

    <div class="modal fade" id="WIPmodal" tabindex="-1" aria-labelledby="WIPModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="WIPModalLabel">Funcionalidad en construcción</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Estamos trabajando en esta opción y estará disponible pronto.</p>
                    <img src="{{ asset('images/coding-freak.gif') }}" alt="En construcción" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
