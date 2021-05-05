@extends('layouts.default')

@section('content')
<!--Bienvenida-->
    <br>
    <div class="container d-flex flex-wrap">
        <div class="container d-flex flex-column justify-content-between">
            <h1 class="align-self-stretch">Sobre la enfermedad</h1>
            <br>
            <h4>¿Que es?</h4>
            <p class="text-justify">El coronavirus SARS-Cov-2 es un virus que apareció en China. Después se extendió a todos los continentes del mundo provocando una pandemia. Actualmente Europa y América son los más afectados. Este nuevo virus, provoca la enfermedad conocida con el nombre de COVID-19.</p>
            <br>
            <h4>¿Cuáles son los síntomas?</h4>
            <div class="text-justify">Las personas con COVID-19 tienen los siguientes signos y síntomas:
                - Tos y/o fiebre y/o dolor de cabeza.
                - Y se acompaña de al menos uno de los siguientes: dolor o ardor de garganta, ojos rojos, dolores en músculos o articulaciones (malestar general).
                - Los casos más graves tienen dificultades para respirar o falta de aire en sus pulmones.
            </div>
            <br>
            <h4>¿A qué personas afecta más?</h4>
            <div class="text-justify">Afecta a todas las personas, pero corren más riesgo:
                - las personas mayores.
                - las personas embarazadas.
                - las personas con alguna enfermedad previa como cáncer, diabetes o hipertensión.
            </div>
            <br>
            <h4>¿Cómo puedo prevenir el COVID-19?</h4>
            <div class="text-justify">
                Hay cosas que puedes hacer para evitar el contagio del COVID-19. Por ejemplo:
                - Lavar las manos con jabón durante al menos 20 segundos.
                - No tocar tus ojos, nariz o boca si tus manos no están limpias.
                - Cuando tosas o estornudes, tapa la nariz y la boca con el brazo o un pañuelo desechable, que deberá ser inmediatamente colocado en la basura en una bolsa de plástico.
                - Mantener una sana distancia con las demás personas.
            </div>
            <br>
            <h6>Información de: Gobierno Federal - Información Accesible Covid - 19: https://coronavirus.gob.mx/informacion-accesible/</h6>
        </div>
        <div class="container">
            <img src="https://github.com/Diego-PA/infovi/blob/main/public/logo.png?raw=true" class="rounded mx-auto d-block" width="300" height="300">
        </div>
    </div>

    @endsection('content')