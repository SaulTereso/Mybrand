<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{{url('assets/css/app.css')}}}>
    <link rel="stylesheet" href={{{url('assets/css/contacto.css')}}}>
    <link rel="stylesheet" href={{{url('assets/css/content.css')}}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xwG/A4P/ZlNMKM8SU5vITtWDfZxMxDX0nWFAdBuQ0tRZOtY4UjP5idjH3Mhp2K1fFUgxjPj3ezu48tGPW4e68JQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Mybrand</title>
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

    <div class="background-container custom-background-container">
        <div class="content pt-5 px-3 d-flex flex-column align-items-left">
            <h2 class="fs-1 text-left text-black">
                <b>{{$images['author']}}</b>
            </h2>
        </div>
    </div>

    <div style="background-color: black;">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-9 text-white">
                    <b class="fs-2">IMAGINAMOS</b>
                </div>
                <div class="col-md-12 col-lg-4 text-white mt-3 mt-md-0">
                    Un logo en el que se mezclara el trabajo del estilista con la frescura que se vive al adoptar un nuevo estilo, cuando nos reinventamos a través de un corte de cabello y el impacto es absoluto.
                </div>

                <div class="col-md-9 text-white mt-4">
                    <b class="fs-2">VISUALIZAMOS</b>
                </div>
                <div class="col-md-12 col-lg-4 text-white mt-3 mt-md-0">
                    <ul>
                        <li>La suavidad con la que debe tratarse a cada cliente.</li>
                        <li>La confianza que pone en quien lo arregla.</li>
                        <li>La mirada de quien se asombra ante nuestros cambios Nuestra presencia en la zona.</li>
                    </ul>
                </div>

                <div class="col-md-12 col-lg-8 mt-4">
                    <div class="bg-warning p-3">
                        <img src="{{ $images['url'] }}" alt="card" class="img-fluid" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="background-container custom-background-container">
        <div class="content pt-5 px-3 d-flex flex-column align-items-center">
            <p class="fs-1 text-center text-black">
                <b>PRESENTAMOS</b>
            </p>
            <p class="fs-6 text-center">
                Suaves líneas que transmiten confianza para quien decide cambiar su imagen, con un estilo fresco y audaz que transmita seguridad a quien transforma absolutamente su look.
            </p>
        </div>
    </div>

    <input type="text" value="{{$images['author']}}" id="nombre_foto" hidden>
    <div class="img-container"></div>

    <div class="background-container">
        <div class="content">
            <div class="content pt-5 px-3 d-flex flex-column align-items-center">
                <p class="fs-1 text-center text-black">
                    <b>“El significado de un logo deriva de la calidad de aquello que simboliza”</b>
                </p>
                <p class="fs-5 text-center">
                    {{$images['author']}}
                </p>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center position-relative bg-warning p-3">
                        <img class="form-image d-md-block d-none" src="/assets/img/mega.png" alt="Icono">
                        <h1 class="d-flex align-items-center">Contáctanos</h1>
                    </div>
                    <div class="col-md-6 mt-3 mt-md-0">
                        <div class="form-container">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
       .img-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .img-link {
            flex: 0 0 calc(33.333% - 10px);
            /* Tres imágenes por fila con espacio entre ellas */
            max-width: calc(33.333% - 10px);
        }

        .img-fluid {
            width: 100%;
            height: auto;
        }

        @media (max-width: 768px) {
            .img-link {
                flex: 0 0 calc(50% - 10px);
                max-width: calc(50% - 10px);
            }
        }

        /* Media query para pantallas aún más pequeñas (ajusta según tus necesidades) */
        @media (max-width: 480px) {
            .img-link {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>

    <script>
        $(document).ready(function() {
            var imgContainer = $('.img-container');
            var nombre = $('#nombre_foto').val();
            console.log(nombre);

            $.ajax({
                url: '/collage/' + nombre,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response && response.images && response.images.length > 0) {
                        $.each(response.images, function(i, imageData) {
                            var imgLink = $('<a class="img-link"></a>');
                            var img = $('<img class="img-fluid" />').attr('src', imageData.url).attr('alt', 'Imagen');

                            imgLink.append(img);
                            imgContainer.append(imgLink);
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