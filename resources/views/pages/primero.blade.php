@extends('main')
@section('content')
        <div class="slider fullscreen">
    <ul class="slides">
      <li>
        <img src="public/verde.jpg"> <!-- random image -->
        <div class="caption justify-align">
           <p class="grey-text text-darken-3 lighten-3"><center><i class="material-icons prefix"><div class="col s12"><h2>¡BIENVENIDO!</h2></div></i></center>
           <center><h3>Esta es la pirmera parte del test de valores allport</h3></center>
           <div class="card-panel  light-green" >
    <span class="white-text"><h5>¡ATENCION!</h5>Se presentan en este estudio de valores un buen número de afirmaciones o   preguntas a las que se les puede dar una de dos contestaciones. Indique sus preferencias personales colocando los números apropiados en los cuadros que se encuentran a la derecha de cada pregunta. Algunas de las alternativas pueden parecerle igualmente atractivas o desagradables, sin embargo, escoja siempre una de ellas aunque sólo le parezca relativamente más aceptable que la otra.
    </span><br/>
         </div>
    </div>
     </li>

       <li>
        <img src="{{asset('images/verde.jpg')}}"> <!-- random image -->
        <div class="caption left-align">
        <div class="card-panel green darken-4">
    <span class="white-text"><h5>¡INDICACIONES!</h5>
Si está de acuerdo con la alternativa (a) y en desacuerdo con la (b) ponga 3 en la primer linea y cero en la segunda linea.<br/>
Si está de acuerdo con la (b) y en desacuerdo con la (a), ponga 3 en la segunda linea y cero en la primer linea.<br/>
Si tiene ligera preferencia por la (a) sobre la (b), ponga 2 en la primer linea y 1 en la segunda linea.<br/>
Si tiene ligera preferencia por la (b) sobre la (a), ponga 2 en la segunda linea y 1 en la primera linea.<br/>  
</span><br/>
</div>
   <center> <a href="/segundo" class="waves-effect waves-light btn-large"><i class="material-icons right">done</i>CONTINUAR</a></center>
        </div>
      </li>

    </ul>
  </div>
<br/><br/>

</div>

 

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



@stop