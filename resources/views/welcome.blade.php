<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>R.A.I.T SOCIAL CEIS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header data-bs-theme="dark">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Raít Social CEIS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/ceis_montessori/">CEIS</a>
                            

                        </li>
                        <li class="nav-item">
                        <!-- <a class="nav-link disabled" aria-disabled="true">Deshabilitado</a>-->
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                       <!--   <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">-->
                        <!--  <button class="btn btn-outline-success" type="submit">Buscar</button>-->
                        <a href="{{ route('appointments.create') }}" class="btn btn-primary mt-4">Solicitar Cita</a>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/slide1.jpg') }}" class="d-block w-100" alt="Slide 1">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>¡Bienvenidos a Raít Social CEIS!</h1>
                            <p class="opacity-75">Descubre nuestra ruta de atención integral en salud. Agenda tus citas y accede a servicios de psicología, medicina integral, enfermería y más, todo desde la comodidad de tu hogar. ¡Tu bienestar es nuestra prioridad! </p>
                            <p><a class="btn btn-lg btn-primary" href="#">Regístrate hoy</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/slide2.jpg') }}" class="d-block w-100" alt="Slide 2">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Educar para todos </h1>
                            <p>Proporcionamos una ruta de atención integral en salud para toda la familia. Agenda tus citas y accede a servicios de psicología, medicina integral, enfermería y más. ¡Tu bienestar es nuestra prioridad!</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Leer más</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/slide3.jpg') }}" class="d-block w-100" alt="Slide 3">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Atención Integral en Salud</h1>
                            <p>Accede a nuestros servicios de psicología, medicina integral, enfermería y más. Agenda tus citas fácilmente y recibe atención personalizada desde cualquier lugar. ¡Tu bienestar es nuestra prioridad!</p>
                            <p><a class="btn btn-lg btn-primary" href="https://www.instagram.com/ceis_montessori/">Explorar galería</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>

        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                <img src="{{ asset('images/circle1.png') }}" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="magen circular 1">
                    <h2 class="fw-normal">Servicios globales </h2>
                    <p>- Medicina general <br> - Psicología <br> - Terapia ocupacional <br> - Fonoaudiología <br>- Fisioterapia <br>- Trabajo Social <br>- Atención a la primera infancia (AIPI)</p>
                    
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="{{ asset('images/circle2.png') }}" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="magen circular 2">
                    <h2 class="fw-normal">Brinda </h2>
                    <p>Brindamos una estimulación temprana y adecuada de niños y niñas de 0 a 4 años de edad, desde el método Montessori, implementando estrategias de neuro plasticidad y adaptación social desde los diferentes escenarios de socialización y aprendizaje. </p>
                    <!--<p><a class="btn btn-secondary" href="#">Ver detalles &raquo;</a></p>-->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="{{ asset('images/circle3.png') }}" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="circular 3">
                    <h2 class="fw-normal">51 personas vinculadas </h2>
                    <p>- 23 niños vinculados de 0 a 4 años <br> - 22 padres de familia <br> - 06 profesionales </p>
                  <!--  <p><a class="btn btn-secondary" href="#">Ver detalles &raquo;</a></p>-->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->

            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Acerca de Nuestro Proyecto <span class="text-body-secondary">Nuestra Misión
                    </span></h2>
                    <p class="lead">Raíz Social CEIS es un proyecto comprometido con la intervención familiar y la atención integral de la primera infancia en Colombia. Nuestros servicios de psicología, medicina integral, fonoaudiología y enfermería están diseñados para mejorar la calidad de vida de las familias a través de la interacción y el apoyo mutuo. Nos enfocamos en brindar un espacio seguro y acogedor para acceder a servicios especializados que promuevan el bienestar emocional y físico de todos los miembros de la familia.</p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('images/featurette1.jpg') }}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" alt="featurette 1">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">Visión  <span class="text-body-secondary">¡CEIS!</span></h2>
                    <p class="lead">El Centro de Entrenamiento Integral en Salud CEIS , será una institución que preste sus servicios de salud con los mas altos entandares de calidad, mediante la ejecución de programas seguros de atención, complementando con innovación y una plataforma tecnológica de vanguardia, enfocados en la excelencia y calidez en la asistencia al paciente y su familia.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="{{ asset('images/featurette2.jpg') }}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" alt="featurette 2">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Participa  <span class="text-body-secondary">¿parte de ceis?</span></h2>
                    <p class="lead">Y sí, este es el último bloque de contenido placeholder representativo. De nuevo, no está destinado a ser realmente leído, simplemente aquí para darte una mejor vista de cómo se vería esto con algún contenido real.</p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('images/featurette3.jpg') }}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" alt="featurette 3">
                </div>
            </div>

            <hr class="featurette-divider">
            

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->

       <!-- Footer with Contact Information -->
       <footer class="bg-dark text-light py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Centro de Entrenamiento Integral en Salud (CEIS)</h5>
                        <p>Teléfonos: 3008229659 - 3012632292</p>
                        <p>Redes Sociales: @ceis_montessori</p>
                        <p>Dirección: Cll 28 #16 - 95</p>
                    </div>
                    <div class="col-md-6 text-end">
                        <p>&copy; 2024 R.A.I.T SOCIAL CEIS. Todos los derechos reservados.</p>
                        <a href="#" class="text-light">Privacidad</a> &middot;
                        <a href="#" class="text-light">Términos</a>
                    </div>
                </div>
            </div>
            <p class="text-center mt-3"><a href="#" class="text-light">Volver arriba</a></p>
        </footer>
    </main>
</body>
</html>
