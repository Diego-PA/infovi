<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <!--jQuery y Bootstrap con Popper-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Autodiagnóstico COVID-19</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="#">Cuestionario</a>
            <a class="nav-item nav-link" href="#">Información</a>
            <a class="nav-item nav-link" href="#">Estadísticas</a>
            <a class="nav-item nav-link" href="#">Acerca de Nosotros</a> 
        </div>
    </div>
    </nav>
<!--
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <span class="fs-4">Autodiagnóstico COVID-19</span>
            </a>

            <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active">Cuestionario</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Información</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Estadísticas</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Acerca de Nosotros</a></li>
            </ul>
        </header>
    </div>
-->
<!--Bienvenida-->
    <br>
    <div class="container d-flex flex-wrap">
        <div class="container d-flex flex-column justify-content-between">
            <h1 class="align-self-stretch">Bienvenid@</h1>
            <p class="text-justify">La confusión de la población respecto a los síntomas del covid 19, provoca que llamen ambulancias o acudan a hospitales muchas veces incluso cuando no tienen la enfermedad entorpeciendo el sistema de salud y su pronta respuesta. Por ello este sistema permite el autodiagnóstico sobre la enfermedad de manera intuitiva para la población en general y permite conocer la posibilidad de infección por covid 19, evitando la sobresaturación de hospitales y ambulancias.</p>
        </div>
        <div class="container">
            <img src="https://github.com/Diego-PA/infovi/blob/main/public/logo.png?raw=true" class="rounded mx-auto d-block" width="300" height="300">
        </div>
    </div>

<!--Cuestionario-->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2>Cuestionario</h2>
                    <p>Cuestionario sobre sintomas de covid</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-ch-6">
                <div class="well-block">
                    <form>
                        <!-- Form start -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="name">¿Cúal es tu temperatura?</label>
                                    <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="email">¿Persives olores?</label>
                                    <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="date">¿Perdiste el sentido del gusto al ingerir alimento?</label>
                                    <input id="date" name="date" type="text" placeholder="" class="form-control input-md">
                                </div>
                            </div>
                            <!-- Select Basic -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="time">¿Te sientes más cansado de lo normal?</label>
                                    <input id="date" name="date" type="text" placeholder="" class="form-control input-md">
                                </div>
                            </div>
                            <!-- Select Basic -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="appointmentfor">¿Cuanto es tu nivel de oxigeno?</label>
                                    <input id="date" name="date" type="text" placeholder="" class="form-control input-md">
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button id="singlebutton" name="singlebutton" class="new-btn-d br-2">Enviar Cuestionario</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- form end -->
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-center text-white">
        <div class="container p-4 pb-0">
            <!--Enlaces-->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>
                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>
                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
            </section>
        </div>

        <!--Copyright-->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a class="text-white" href="#">Universidad Nácional Autónoma de México</a>
        </div>
    </footer>
</body>
</html>