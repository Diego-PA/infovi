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
                    <form method="POST" action="{{ route('guardar') }}">
                        @csrf
                        <!-- Form start -->
                        <div class="row">

                            <!--correo electrónico-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="correo">Correo Electrónico (Ópcional)</label>
                                    <input id="correo" for="correo" name="correo" type="text" placeholder="correo@ejemplo.com" class="form-control input-md">
                                </div>
                            </div>

                            <!--genero-->
                            <div class="col-md-6">
                                <label class="control-label" for="genero">Género</label>
                                <select class="custom-select" aria-label="Default select example" for="genero" name="genero">
                                    <option selected>Selecciona una opción</option>
                                    <option value="F">Femenino</option>
                                    <option value="M">Masculino</option>
                                </select>
                            </div>

                            <!--contacto con algún paciente confirmado-->
                            <div class="col-md-6">
                                <label class="control-label" for="contacto">¿Has tenido contacto con algún paciente confirmado con Covid 19 en los últimos días?</label>
                                <select class="custom-select" aria-label="Default select example" for="contacto" name="contacto">
                                    <option selected>Selecciona una opción</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                    <option value="3">No lo sé</option>
                                </select>
                            </div>

                            <!--fiebre-->
                            <div class="col-md-6">
                                <label class="control-label" for="fiebre">¿Tienes fiebre mayor a 38°C?</label>
                                <select class="custom-select" aria-label="Default select example" for="fiebre" name="fiebre">
                                    <option selected>Selecciona una opción</option>
                                    <option value="true">Si</option>
                                    <option value="false">No</option>
                                </select>
                            </div>

                            <!--tos seca-->
                            <div class="col-md-6">
                                <label class="control-label" for="tos">¿Tienes tos seca?</label>
                                <select class="custom-select" aria-label="Default select example" for="tos" name="tos">
                                    <option selected>Selecciona una opción</option>
                                    <option value="true">Si</option>
                                    <option value="false">No</option>
                                </select>
                            </div>

                            <!--dificultad respirar-->
                            <div class="col-md-6">
                                <label class="control-label" for="respirar">¿Has experimentado falta de aire o dificultad para respirar?</label>
                                <select class="custom-select" aria-label="Default select example" for="respirar" name="respirar">
                                    <option selected>Selecciona una opción</option>
                                    <option value="true">Si</option>
                                    <option value="false">No</option>
                                </select>
                            </div>

                            <!--dolor de pecho-->
                            <div class="col-md-6">
                                <label class="control-label" for="pecho">¿Sientes dolor en el pecho o pulsaciones?</label>
                                <select class="custom-select" aria-label="Default select example" for="pecho" name="pecho">
                                    <option selected>Selecciona una opción</option>
                                    <option value="true">Si</option>
                                    <option value="false">No</option>
                                </select>
                            </div>

                            <!--dolor de cabeza-->
                            <div class="col-md-6">
                                <label class="control-label" for="cabeza">¿Sientes dolor de cabeza recurrentemente?</label>
                                <select class="custom-select" aria-label="Default select example" for="cabeza" name="cabeza">
                                    <option selected>Selecciona una opción</option>
                                    <option value="true">Si</option>
                                    <option value="false">No</option>
                                </select>
                            </div>

                            <!--escrurrimiento-->
                            <div class="col-md-6">
                                <label class="control-label" for="escurrimiento">¿Presentas escurrimiento nasal?</label>
                                <select class="custom-select" aria-label="Default select example" for="escurrimiento" name="escurrimiento">
                                    <option selected>Selecciona una opción</option>
                                    <option value="true">Si</option>
                                    <option value="false">No</option>
                                </select>
                            </div>

                            <!--dolores musculares-->
                            <div class="col-md-6">
                                <label class="control-label" for="musculos">¿Presentas dolorers musculares o sensación de cuerpo cortado?</label>
                                <select class="custom-select" aria-label="Default select example" for="musculos" name="musculos">
                                    <option selected>Selecciona una opción</option>
                                    <option value="true">Si</option>
                                    <option value="false">No</option>
                                </select>
                            </div>

                            <!--diarrea-->
                            <div class="col-md-6">
                                <label class="control-label" for="diarrea">¿Sufres de diarrea o malestar estomacal?</label>
                                <select class="custom-select" aria-label="Default select example" for="diarrea" name="diarrea">
                                    <option selected>Selecciona una opción</option>
                                    <option value="true">Si</option>
                                    <option value="false">No</option>
                                </select>
                            </div>

                            <!-- Button -->
                            <div class="col-md-12">
                            <br>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                            <br>
                            </div>
                        </div>
                    </form>
                    <!-- form end -->
                </div>
            </div>
        </div>
    </div>

@endsection('content')