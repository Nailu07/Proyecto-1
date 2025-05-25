

<body>
    <nav class="bg-success text-white py-3" style="--bs-bg-opacity: .5;">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">

            <div class="d-flex align-items-center gap-2 fw-bold fs-5 mb-2 mb-md-0">
                <img src="img/logo.png" alt="Logo Cuchitril" width="50" height="50" class="img-fluid">Conjunto Cuchitril
            </div>

            <div class="d-flex flex-column flex-md-row gap-3 text-center text-md-start">
                <a href="#servicios" class="text-white text-decoration-none">Servicios</a>
                <a href="#nuestro-conjunto" class="text-white text-decoration-none">Nuestro Conjunto</a>
                <a href="?pid=<?php echo base64_encode("Presentacion/iniciarSesion.php") ?>" class="text-white text-decoration-none"><i class="fas fa-user me-1"></i>Iniciar Sesión</a>
            </div>     
        </div>
    </nav>


    <div class="container-fluid p-0 bg-success d-flex justify-content-center align-items-center" style="height: 90vh;">
    <div class="card border-0 rounded-0 h-100 w-100 bg-warning bg-opacity-25" >
        <!-- img a todo el alto del card, con object-fit: contain -->
        <img src="img/Bienvenida.png"
            class="card-img h-100 object-fit-contain"
            alt="Bienvenida">
        <!-- overlay (si lo necesitas) -->
        <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center">
        <h1 class="text-white fw-bold">Conjunto Residencial Cuchitril</h1>
        <a href="#informacion" class="btn btn-light">¡Paga aqui tus facturas!</a>
        </div>
    </div>
    </div>

    <div class="bg-success text-white py-4 px-2 d-flex align-items-center justify-content-between mt-3" >
        <div class="d-flex justify-content-around w-100 text-center flex-wrap">
            <div class="px-3 border-end">
                <a href="#" class="text-white text-decoration-underline d-block">Noticias</a>
                <i class="fa-solid fa-hospital"></i>
            </div>
            <div class="px-3 border-end">
                <a href="#" class="text-white text-decoration-underline d-block">Administracion</a>
                <i class="fa-solid fa-notes-medical"></i>
            </div>
            <div class="px-3 border-end">
                <a href="#" class="text-white text-decoration-underline d-block">Pagar Cuenta</a>
                <i class="fa-solid fa-book"></i>
            </div>
        </div>
    </div>

    <div class="container py-5" id="servicios">
            <h3 class="text-center mb-4">Servicios</h3>
            <div class="row text-center">
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class="fa-solid fa-leaf fa-2x mb-2"></i>
                            <h5 class="card-title">Zonas verdes</h5>
                            <p class="card-text">Un lugar amplio donde puedes pasar un rato o sacar a pasear a tus mascotas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class="fa-solid fa-dumbbell fa-2x mb-2"></i>
                            <h5 class="card-title">GImnasio</h5>
                            <p class="card-text">Lunes a Viernes de 6:00 am a 8:00 pm
                                Sabados y Festivos de 8:00 am a 2:00 pm
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class="fa-solid fa-calendar-days fa-2x mb-2"></i>
                            <h5 class="card-title">Salon de eventos</h5>
                            <p class="card-text">Para reservas por favor contactarse con un administrador.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class="fa-solid fa-square-parking fa-2x mb-2"></i>
                            <h5 class="card-title">Parqueadero</h5>
                            <p class="card-text">Servicio de parqueadero disponible para visitantes y residentes del conjunto.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class="fa-solid fa-bicycle fa-2x mb-2"></i>
                            <h5 class="card-title">Bicicleteros</h5>
                            <p class="card-text">Servicio de bicicletero disponible para visitantes y residentes del conjunto.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class="fa-solid fa-child-reaching fa-2x mb-2"></i>
                            <h5 class="card-title">Parque infantil</h5>
                            <p class="card-text">Un pequeño espacio para que los mas pequeños se diviertan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="container my-5" id="nuestro-conjunto" >
    <div class="card shadow-sm p-4 bg-white rounded">
        <h2 class="fw-bold mb-3">Nuestro conjunto</h2>
        <p>
        <strong>¡Donde cada piedra es un detalle soberbio!</strong>
        <br>
        <br>
        En <strong>Conjunto Residencial Cuchitril</strong>, ofrecemos un espacio moderno, seguro y rodeado de naturaleza, 
        ideal para familias, parejas y personas que buscan tranquilidad sin alejarse de la ciudad.
        <br><br>
        Nuestras instalaciones cuentan con amplias zonas verdes, parqueadero, salón de eventos, 
        vigilancia las 24 horas, entre otros servicios. Cada apartamento ha sido diseñado pensando en el confort 
        y la funcionalidad de nuestros residentes.
        </p>
    </div>
    </div>





    <div class="py-5 bg-success text-white" style="--bs-bg-opacity: .5;">
        <div class="container" id="Nosotros">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <img src="img/logo.png" alt="Logo" class="img-fluid mb-3" width="200">
                    <h2>Conjunto Residencial Cuchitril</h2>
                </div>
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold">Contáctanos</h5>
                    <p><i class="fas fa-clock text-success"></i> Horario: 7:00 am a 5:00 pm</p>
                    <p><i class="fas fa-map-marker-alt text-success"></i> Dirección: Carrera 1 # 1 -11 Sur</p>
                    <p><i class="fas fa-envelope text-success"></i> CuchitrilCR@cuchirs.com</p>
                    <p><i class="fas fa-phone text-success"></i> 601 1234567 - 7654321</p>
                    <h5 class="fw-bold">Redes Sociales</h5>
                    <div class="d-flex flex-column">
                        <a href="https://www.facebook.com/" class="text-white"><i class="fa-brands fa-facebook"></i> Facebook</a>
                        <a href="https://www.instagram.com/" class="text-white"><i class="fa-brands fa-instagram"></i> Instagram</a>
                        <a href="https://co.linkedin.com/" class="text-white"><i class="fa-brands fa-linkedin"></i> LinkedIn</a>
                        <a href="https://www.youtube.com/" class="text-white"><i class="fa-brands fa-youtube"></i> YouTube</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold">Información de Interés</h5>                    
                    <a href="#" class="text-white">Manual de convivencia</a>
                    <a href="#" class="text-white">Documentos</a>
                    <a href="#" class="text-white">¿Quiénes somos?</a>
                    <a href="#" class="text-white">Quejas o Reclamos</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
