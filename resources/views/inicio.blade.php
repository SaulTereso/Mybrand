<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{{url('assets/css/app.css')}}}>
    <link rel="stylesheet" href={{{url('assets/css/contact.css')}}}>
    <link rel="stylesheet" href={{{url('assets/css/content.css')}}}>
    <title>Mybrand</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xwG/A4P/ZlNMKM8SU5vITtWDfZxMxDX0nWFAdBuQ0tRZOtY4UjP5idjH3Mhp2K1fFUgxjPj3ezu48tGPW4e68JQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--Menu-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="max-width: 150px; display: block;">
                <img src="/assets/img/logo-mybrand@2x.png" alt="Logo" style="max-width: 100%; height: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#image-carousel">Casos de éxito</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!--Contenido-->
    <div class="background-container">
        <div class="content">
            <div class="container-fluid pt-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="vstack gap-3">
                            <div class="p-2">
                                <p class="fs-1">Invertir en la identidad <br>
                                    digital de tu marca no es caro, <br>
                                    no hacerlo sí lo es.
                                </p>
                            </div>
                            <div class="p-2">
                                <p class="fs-3">
                                    En <b>mybrand</b> planeamos, diseñamos y ejecutamos estrategias digitales bajo una metodología comprobada para encontrar la personalidad apropiada de tu marca.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 d-none d-md-block">
                        <div class="order-md-last text-center">
                            <img class="img-fluid" src="/assets/img/mega-iconB.png" alt="Icono" width="58%" height="58%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: yellow;" class="text-center p-4">
        <h1><b>¿Qué hacemos?</b></h1>
        <p class="text-break px-3">Te ayudamos a crear la personalidad de tu empresa. Con nuestra asesoría 360 podrás tener identidad visual, tono de comunicaciones y lenguajes sin importar el tipo de negocio que tengas. Te asesoramos en:</p>

        <div class="container mt-4">
            <div class="row justify-content-center align-items-center">
                <div class="col-6 col-md-4">
                    <img class="img-fluid" src="/assets/img/Grupo653.png" alt="Imagen 1" width="30%" height="30%">
                </div>
                <div class="col-6 col-md-4">
                    <img class="img-fluid" src="/assets/img/Grupo648.png" alt="Imagen 2" width="50%" height="50%">
                </div>
                <div class="col-6 col-md-4">
                    <img class="img-fluid" src="/assets/img/Grupo652.png" alt="Imagen 3" width="50%" height="50%">
                </div>
            </div>
        </div>
    </div>

    <div class="background-container custom-background-container">
        <div class="content pt-5 px-3 d-flex flex-column align-items-center">
            <p class="fs-1 text-center text-black">
                <b>Sabemos justo lo que tu MARCA necesita para atraer clientes potenciales</b>
            </p>
        </div>
    </div>

    <div>
        <img class="img-fluid" src="/assets/img/todo.png" alt="Todo" width="110%" data-bs-toggle="modal" data-bs-target="#exampleModal">
    </div>

    <div class="bg-light mt-md-5 p-4 text-center">
        <p class="fs-2 fs-md-3 text-break px-3">
            En
            <b>
                mybrand
            </b>
            nos apasiona analizar, imaginar, crear y definir estilos de comunicación que posicionarán tu marca.
        </p>
    </div>

    <div style="background-color: black;">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-9 text-white">
                    <b class="fs-2">NOSOTROS</b>
                </div>
                <div class="col-md-4 text-white mt-3 mt-md-0">
                    Nos apasiona encontrar la esencia de las marcas y transmitirla hacia su público. <br><br>
                    Sabemos que a través de un logo, un slogan, los mensajes que lanzamos y todo
                    lo que se asocia con cada marca deja una huella en la mente y en el corazón del
                    espectador, logrando que se identifique y nos haga parte de su mundo.
                    <br><br>
                    Así, nos reunimos en este laboratorio de ideas un grupo de profesionales que dedican su vida a esto:
                    encontrar qué es lo que hace a tu marca ser única.
                </div>
                <div class="col-md-8 d-flex align-items-center justify-content-end">
                    <div class="bg-warning p-3" style="width: 60%;">
                        <img src="/assets/img/multiple.png" alt="card" class="img-fluid" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light mt-md-5 p-4 text-center">
        <p class="fs-2 fs-md-3 text-break px-3">
            Casos de Exito
        </p>
    </div>

    <div class="owl-carousel owl-theme">
        <!-- Las imágenes de la API se agregarán aquí dinámicamente -->
    </div>

    <div id="image-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" id="carousel-inner"></div>
        <button class="carousel-control-prev" type="button" data-bs-target="#image-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#image-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>


    <div class="background-container">
        <div class="content">
            <div class="form-container">
                <div class="row">
                    <div class="col-md-6 text-center position-relative" style="background-color: yellow;">
                        <img class="form-image d-md-block d-none" src="/assets/img/mega.png" alt="Icono">
                        <h1>Contáctanos</h1>
                    </div>
                    <div class="col-md-6">
                        <form action="{{ route('store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="mensaje" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required></textarea>
                            </div>
                            <input type="submit" class="btn btn-success" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light">
        <div class="container">
            <div class="row text-center text-md-left">
                <div class="col-12 col-md-6">
                    <img src="/assets/img/mybrand.png" alt="Mybrand logo" class="img-fluid" style="max-width: 100px;">
                    <p class="text-muted"><b>Copyright &copy; 2022 Mybrand</b></p>
                </div>
                <div class="col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-end">
                    <nav class="navbar navbar-expand navbar-light bg-light">
                        <ul class="list-unstyled">
                            <li><b>Tel.: 55 55 55 55 55</b></li>
                            <li>Mail: hola@mybrand.com</li>
                            <li>Aviso de Privacidad</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>






    <!-- CDN de Bootstrap JavaScript (incluyendo Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></script>

    <!-- jQuery (asegúrate de incluirlo antes de tu código JS) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-/ha9jvxFan11l9Fb2NqzI8CWq6OfblohUqSZ8etxZfGPGHf7dG1INDJszVOZAgb3" crossorigin="anonymous"></script>

    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        .owl-carousel img {
            max-width: 100%;
            height: auto;
        }

        .author-name {
            text-align: center;
            font-size: 14px;
            font-weight: bold;
            margin-top: 5px;
        }
    </style>
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');

            $.ajax({
                url: '/images',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response && response.images && response.images.length > 0) {
                        var carouselInner = owl;

                        $.each(response.images, function(i, imageData) {
                            var item = $('<div class="item"></div>');
                            var imgLink = $('<a class="img-link"></a>').attr('href', '/informacion/' + imageData.author);
                            var img = $('<img class="img-fluid" />').attr('src', imageData.url).attr('alt', 'Imagen');
                            var authorName = $('<div class="author-name">' + imageData.author + '</div>');

                            imgLink.append(img);
                            item.append(imgLink);
                            item.append(authorName);
                            carouselInner.append(item);
                        });

                        owl.owlCarousel({
                            center: true,
                            items: 2,
                            loop: true,
                            margin: 10,
                            nav: false,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            responsive: {
                                600: {
                                    items: 4
                                }
                            }
                        });
                    } else {
                        console.error('La respuesta no contiene información válida.');
                    }
                },
                error: function(error) {
                    console.error('Error en la petición AJAX:', error);
                }
            });
        });
    </script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    @include('sweetalert::alert')
</body>

</html>