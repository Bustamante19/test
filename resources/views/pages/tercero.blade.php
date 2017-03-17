@extends('main')
@section('content')

<div class="slider fullscreen">
    <ul class="slides">
        <li>
            <img src="public/2.jpg"> <!-- random image -->
            <div class="caption center-align">
                <center><i class="material-icons prefix"><div class="col s12"><h2>¡BIENVENIDO!</h2></div></i></center>
                <center><h3>Esta es la segunda parte del test de valores allport</h3></center>
                <div class="card-panel cyan darken-3">
    <span class="white-text"><h5>¡ATENCION!</h5> Cada una de las situaciones siguientes o preguntas están seguidas de 4 actitudes o
contestaciones posibles. Arregle las respuestas en el orden de su preferencia personal, escribiendo en el cuadro apropiado de la derecha la calificación 4, 3, 2, ó 1. Ponga 4 a la afirmación que prefiera en primer lugar, 3 en la que prefiera en segundo lugar y así sucesivamente.
    </span><br/>
                </div>
            </div>
        </li>
        <li>
            <img src="public/2.jpg"> <!-- random image -->
            <div class="caption left-align">
                <div class="card-panel red accent-4">
    <span class="white-text"><h5>¡INDICACIONES!</h5>
EJEMPLO: Si en este lugar hubiese una pregunta y las siguientes afirmaciones fuesen afirmativas sobre<br/>
las que se necesitara expresar la preferencia, usted calificaría como sigue:<br/>
Pondría 4 en el cuadro, si prefiere usted esta afirmación en primer lugar.<br/>
Pondría 3 en el cuadro, si esta afirmación la prefiere en segundo lugar.<br/>
Pondría 2 en el cuadro, si esta afirmación la prefiere en tercer lugar.<br/>
Pondría 1 en el cuadro, si esta afirmación la prefieren en cuarto lugar.<br/>
    </span><br/>
                </div>
                <br/><br/>

                <center> <a href="/cuarto" class="waves-effect waves-light btn-large"><i class="material-icons right">done</i>COMENZAR</a></center>
                <br/><br/>

            </div>
        </li>


    </ul>
</div>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



<script>
    $(document).ready(function() {
        $('select').material_select();

        $('.slider').slider({
            interval:25000
        });
    });


</script>
@stop