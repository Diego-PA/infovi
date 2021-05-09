@extends('layouts.default')

@section('content')
<!--Bienvenida-->
    <br>
    <div class="container d-flex flex-wrap">
        <div class="container">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        </div>
        <div class="container d-flex flex-column justify-content-between">
            <h1 class="align-self-stretch">Bienvenid@</h1>
            <br>
            <p class="text-justify">Para dejar de recibir información acerca del covid 19 y de tus resultados, por favor llena este formaulario, con tu correo electrónico y si además deseas eliminar permanentemente tu correo de la nuestra base de datos por favor habilita el recuadro con la leyenda "Deseo eliminar mi correo de la base de datos"</p>
        </div>
        <div class="container">
            <img src="https://github.com/Diego-PA/infovi/blob/main/public/logo.png?raw=true" class="rounded mx-auto d-block" width="300" height="300">
        </div>
        @if ($errors->any())
            <div class="container alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('deshabilitar') }}">
            @csrf
            <!-- Form start -->
            <div class="row">

                <!--correo electrónico-->
                <div class="col-md-12 col-lg-12">
                    <div class="form-group">
                        <label class="control-label" for="correo">Correo Electrónico:</label>
                        <input id="correo" for="correo" name="correo" type="text" placeholder="correo@ejemplo.com" class="form-control input-md">
                    </div>
                </div>

                <!--genero-->
                <div class="col-md-12 col-lg-12">
                    <label class="control-label" for="borrar">¿Deseas borrar tu correo de la base de datos?</label>
                    <select class="custom-select" aria-label="Default select example" for="borrar" name="borrar">
                        <option selected value="true">Si</option>
                        <option value="false">No</option>
                    </select>
                </div>
                <!-- Button -->
                <div class="col-md-3 col-sm-12 col-lg-3">
                    <br>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Anular mi suscripción</button>
                    <br>
                </div>
            </div>
        </form>
        <br><br><br>
    </div>
    <br><br>

    @endsection('content')