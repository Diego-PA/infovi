@extends('layouts.default')

@section('content')
<!--Usa bootstrap 4-->
    <br>
    <div class="container d-flex flex-wrap">
        <div class="container d-flex flex-column justify-content-between">
            <h1 class="align-self-stretch">Bienvenid@</h1>
            <br>
            <p class="text-justify">La confusión de la población respecto a los síntomas del covid 19, provoca que llamen ambulancias o acudan a hospitales muchas veces incluso cuando no tienen la enfermedad entorpeciendo el sistema de salud y su pronta respuesta. Por ello este sistema permite el autodiagnóstico sobre la enfermedad de manera intuitiva para la población en general y permite conocer la posibilidad de infección por covid 19, evitando la sobresaturación de hospitales y ambulancias.</p>
        </div>
        <div class="container">
            <img src="https://github.com/Diego-PA/infovi/blob/main/public/logo.png?raw=true" class="rounded mx-auto d-block" width="300" height="300">
        </div>
    </div>

<!--Cuestionario-->
<!--
    -Introduce tu género
    -Has tenido contacto con algún paciente confirmado con Covid 19
    -Tienes fiebre mayor a 38°c
    -Tienes tos seca?
    -Has experimentado falta de aire o dificultad para respirar
    -Sientes dolor en el pecho
    -Dolor de cabeza
    -Presentas escurrimiento nasal
    -Dolores musculares
    -Diarrea o malestar estomacal
-->

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
                    <form action="" method="post">
                        @csrf
                        <!-- Form start -->
                        <div class="row">
                            <!--correo electrónico-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="correo">Correo Electrónico (Ópcional)</label>
                                    <input id="correo" name="correo" type="text" placeholder="correo@ejemplo.com" class="form-control input-md">
                                </div>
                            </div>

                            <!--genero-->
                            <div class="col-md-6">
                                <label class="control-label" for="genero">Género</label>
                                <select class="custom-select" aria-label="Default select example">
                                    <option selected>Selecciona una opción</option>
                                    <option value="1">Femenino</option>
                                    <option value="2">Masculino</option>
                                </select>
                            </div>

                            <!--contacto con algún paciente confirmado-->
                            <div class="col-md-6">
                                <label class="control-label" for="contacto">¿Has tenido contacto con algún paciente confirmado con Covid 19 en los últimos días?</label>
                                <select class="custom-select" aria-label="Default select example">
                                    <option selected>Selecciona una opción</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                    <option value="2">No lo sé</option>
                                </select>
                            </div>


                            <!--Aquí me quedé###########################################->


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

@endsection('content')