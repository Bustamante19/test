@extends('main')
@section('content')

<div class="card blue lighten-4">
    <div class="card-content   light-green">
        <center><i class="material-icons prefix"><div class="col s12"><h3>INICIO DEL TEST</h3></div></i></center>
    </div>
    <div class="card-tabs cyan accent-2">
        <ul class="tabs tabs-fixed-width">
            <li class="tab"><a class="active" href="#test4">PRIMER SESION</a></li>
            <li class="tab"><a href="#test5">SEGUNDA SESION</a></li>
            <li class="tab"><a href="#test6">TERCERA SESION</a></li>
        </ul>
    </div>
    <form method="POST" action="calculo.php">
        <div class="card-content light-green lighten-2">

            <div id="test4">
                <div class="row">
                    <div class="col s6">
                        <div class="card-panel teal">
                            <span class="white-text">1.-Diseñar programas de computación y explorar nuevas aplicaciones tecnológicas para uso del internet.</span><br/>
                            (A).- SI
                            <div class="input-field inline">
                                <input  type="text" name="r1" size="5" maxlength="1" requerid>

                            </div>
                            <br/>
                            (B).- NO
                            <div class="input-field inline">
                                <input type="text" name="s1" size="5" maxlength="1" requerid>
                            </div>
                        </div>
                        <br/>

                        <div class="card-panel teal">
                            <span class="white-text">2. La Biblia se debe mirar desde un punto de vista de su bella mitología y de su  hermoso estilo literario y no como una revelación espiritual.</span><br/>
                            (A).-SI
                            <div class="input-field inline">
                                <input  type="text" name="t2" size="5" maxlength="1" requerid>
                            </div>
                            <br/>
                            (B).-NO
                            <div class="input-field inline">
                                <input type="text" name="z2" size="5" maxlength="1" requerid>

                            </div>
                        </div>
                        <br/>

                        <div class="card-panel teal">
                            <span class="white-text">3. ¿A cuál de los siguientes hombres cree que debe atribuírsele más mérito como  contribuidor al progreso de la humanidad?</span><br/>
                            (A).-Aristóteles
                            <div class="input-field inline">
                                <input  type="text" name="r3" size="5" maxlength="1" requerid>
                            </div>
                            <br/>
                            (B).-Simón Bolivar
                            <div class="input-field inline">
                                <input type="text" name="t3" size="5" maxlength="1" requerid>
                            </div>
                        </div>
                        <br/>

                        <div class="card-panel teal">
                            <span class="white-text"> 4. Dando por hecho que usted tiene la habilidad  necesaria, preferiría ser.</span><br/>
                            (A).-Banquero
                            <div class="input-field inline">
                                <input  type="text" name="s4" size="5" maxlength="1" requerid>
                            </div>
                            <br/>
                            (B).-Politico
                            <div class="input-field inline">
                                <input type="text" name="y4" size="5" maxlength="1" requerid>
                            </div>
                        </div>
                        <br/>

                        <div class="card-panel teal">
                            <span class="white-text">5. Cree justificable que los grandes artistas como  Beethoven, Wagner y Byron, hayan sido egoístas  e indiferentes a los sentimientos de otros?</span><br/>
                            (A).-SI
                            <div class="input-field inline">
                                <input  type="text" name="t5" size="5" maxlength="1" requerid>
                            </div>
                            <br/>
                            (B).-NO
                            <div class="input-field inline">
                                <input type="text" name="x5" size="5" maxlength="1" requerid>
                            </div>
                        </div>
                    </div>

                    <div class="col s6">
                        <div class="card-panel teal">
                            <span class="white-text">6. Cuál de estas dos disciplinas cree que llegarán  a tener en el futuro un mayor valor para la  humanidad?</span><br/>
                            (A).-Las matemáticas
                            <div class="input-field inline">
                                <input  type="text" name="r6" size="5" maxlength="1" requerdi>
                            </div>
                            <br/>
                            (B).-La teología
                            <div class="input-field inline">
                                <input type="text" name="z6" size="5" maxlength="1" requerid>
                                <br/>
                            </div>
                        </div>



                        <div class="card-panel teal">
                            <span class="white-text">7. Cuál considera usted que debe ser la función  más importante de los grandes dirigentes  modernos?</span><br/>
                            (A).-Inducir a la gente a obtener resultados prácticos
                            <div class="input-field inline">
                                <input  type="text" name="s7" size="5" maxlength="1" requerid>
                            </div>
                            <br/>
                            (B).-Inducir a la gente a interesarse por los
                            Derechos de otros seres humanos
                            <div class="input-field inline">
                                <input type="text" name="x7" size="5" maxlength="1" requerid>
                            </div>
                        </div>
                        <br/>

                        <div class="card-panel teal">
                            <span class="white-text">8. Cuando presencia una ceremonia pomposa  (eclesiástica o académica) que le impresiona  más:</span><br/>
                            (A).-El colorido y formalidad del acto mismo
                            <div class="input-field inline">
                                <input  type="text" name="t8" size="5" maxlength="1" requerid>
                            </div>
                            <br/>
                            (B).-La influencia y la fuerza del grupo.
                            <div class="input-field inline">
                                <input type="text" name="y8" size="5" maxlength="1" requerid>
                            </div>
                        </div>
                        <br/>


                        <div class="card-panel teal">
                            <span class="white-text">9. Cuáles de estos rasgos de carácter consideraría más deseables? </span><br/>
                            (A).-Los altos ideales y el respeto
                            <div class="input-field inline">
                                <input  type="text" name="r9" size="5" maxlength="1" requerid>
                            </div>
                            <br/>
                            (B).-El desinterés y la condolencia
                            <div class="input-field inline">
                                <input type="text" name="t9" size="5" maxlength="1" requerid>
                            </div>
                        </div>
                        <br/>
                        <div class="card-panel teal">
                            <span class="white-text">10. Si fuera catedrático universitario y tuviera la habilidad necesaria preferiría dar clases de </span><br/>
                            (A).-Literatura
                            <div class="input-field inline">
                                <input  type="text" name="y10" size="5" maxlength="1" requerid>
                            </div>
                            <br/>
                            (B).-Quimica y Fisica
                            <div class="input-field inline">
                                <input type="text" name="x10" size="5" maxlength="1" requerid>
                            </div>
                        </div>
                        <br/>
                    </div>
                    <center><input type="submit" name="button" id="button" value="Enviar"></center><br/><br/>
                    <center> <a href="primero.html" type="submit" name="sesion1" id="sesion1" class="waves-effect waves-light btn-large"><i class="material-icons right">clear_all</i>GUARDAR</a></center>
                    <br/><br/>
                </div>
            </div>




    </form>


    <div id="test5">
        <div class="row">
            <div class="col s6">

                <div class="card-panel teal">
                    <span class="white-text">11. Si tuviera las siguientes noticias en el periódico  matutino con encabezados de igual tamaño cuál  leería con más atención </span><br/>
                    (A).-Dignatarios de la iglesia resuelven importante
                    problema religioso
                    <div class="input-field inline">
                        <input  type="text" name="r11" size="5" maxlength="1">
                    </div>
                    <br/>
                    (B).-Grandes mejoras en las condiciones del mercado
                    <div class="input-field inline">
                        <input type="text" name="y11" size="5" maxlength="1" >
                    </div>
                </div>
                <br/>

                <div class="card-panel teal">
                    <span class="white-text">12. En las mismas circunstancias que en la pregunta 11 </span><br/>
                    (A).-La Suprema Corte anuncia su decisión
                    <div class="input-field inline">
                        <input  type="text" name="s12" size="5" maxlength="1">
                    </div>
                    <br/>
                    (B).-Nueva teoría política es anunciada.
                    <div class="input-field inline">
                        <input type="text" name="z12" size="5" maxlength="1" >
                    </div>
                </div>
                <br/><br/>

                <div class="card-panel teal">
                    <span class="white-text">13. Cuando visita una catedral, le impresiona más el  sentido de reverencia y religiosidad que las  características arquitectónicas y los emplomados? </span><br/>
                    (A).-SI
                    <div class="input-field inline">
                        <input  type="text" name="r12" size="5" maxlength="1">
                    </div>
                    <br/>
                    (B).-NO
                    <div class="input-field inline">
                        <input type="text" name="x13" size="5" maxlength="1" >
                    </div>
                </div>
                <br/><br/>

                <div class="card-panel teal">
                    <span class="white-text">14. Suponiendo que tenga tiempo disponible preferiría  utilizarlo en: </span><br/>
                    (A).-Desarrollar maestría en su habilidad favorita
                    <div class="input-field inline">
                        <input  type="text" name="s14" size="5" maxlength="1">
                    </div>
                    <br/>
                    (B).-Hacer labor social o servicio público
                    <div class="input-field inline">
                        <input type="text" size="5" maxlength="1" >
                    </div>
                </div>
                <br/>

                <div class="card-panel teal">
                    <span class="white-text">15. En una exposición le gusta más ir a lugares donde  pueda ver:  </span><br/>
                    (A).-Nuevos productos industriales
                    <div class="input-field inline">
                        <input  type="text" name="y15" size="5" maxlength="1">
                    </div>
                    <br/>
                    (B).-Aparatos científicos tales como microscopios,
                    péndulos, brújulas, etc.
                    <div class="input-field inline">
                        <input type="text" name="z15" size="5" maxlength="1" >
                    </div>
                </div>
                <br/>
            </div>


            <div class="col s6">
                <div class="row">
                </div>

                <div class="card-panel teal">
                    <span class="white-text">16. Si tuviera la oportunidad y si ninguna de estas  actividades existiesen en donde usted vive, qué  preferiría fundar:   </span><br/>
                    (A).-Una sociedad de debates sobre problemas
                    nacionales
                    <div class="input-field inline">
                        <input  type="text" name="s16" size="5" maxlength="1">
                    </div>
                    <br/>
                    (B).-Una orquesta de música clásica
                    <div class="input-field inline">
                        <input type="text" name="x16" size="5" maxlength="1" >
                    </div>
                </div>
                <br/>

                <div class="card-panel teal">
                    <span class="white-text">17. La finalidad de las iglesias en la actualidad  debería ser:  </span><br/>
                    (A).-Exaltar las tendencias altruistas y caritativas
                    <div class="input-field inline">
                        <input  type="text" name="s17" size="5" maxlength="1">
                    </div>
                    <br/>
                    (B).-Fomentar el recogimiento espiritual y el sentido
                    de comunión con el Altísimo
                    <div class="input-field inline">
                        <input type="text" name="y17" size="5" maxlength="1" >
                    </div>
                </div>
                <br/>

                <div class="card-panel teal">
                    <span class="white-text">18. Si tuviera que pasar algún tiempo en una sala  de espera y hubiera sólo dos revistas, cuál escogería:  </span><br/>
                    (A).-Seminario de estudios científicos
                    <div class="input-field inline">
                        <input  type="text" name="x18" size="5" maxlength="1">
                    </div>
                    <br/>
                    (B).-Arte y decoración
                    <div class="input-field inline">
                        <input type="text" name="z18" size="5" maxlength="1" >
                    </div>
                </div>
                <br/>

                <div class="card-panel teal">
                    <span class="white-text">19. Preferiría usted escuchar una serie de conferencias  sobre:   </span><br/>
                    (A).-Comparación de méritos en los sistemas
                    de gobierno de España y México
                    <div class="input-field inline">
                        <input  type="text" name="t19" size="5" maxlength="1">
                    </div>
                    <br/>
                    (B).-Comparación del desarrollo de las grandes
                    creencias religiosas
                    <div class="input-field inline">
                        <input type="text" name="y19" size="5" maxlength="1" >
                    </div>
                </div>

                <div class="card-panel teal">
                    <span class="white-text">20. Cuál de las siguientes funciones de la educación  formal considera más importante?  </span><br/>

                    (A).-La preparación que da en los aspectos de
                    utilidad práctica y recompensa monetaria
                    <div class="input-field inline">
                        <input  type="text" name="r20" size="5" maxlength="1">
                    </div>
                    <br/>
                    (B).-La preparación que da para participar en las
                    actividades de la comunidad y en la ayuda de
                    seres desafortunados
                    <div class="input-field inline">
                        <input type="text" name="s20" size="5" maxlength="1" >
                    </div>
                </div>
            </div>
            <center> <a href="primero.html" class="waves-effect waves-light btn-large"><i class="material-icons right">clear_all</i>GUARDAR</a></center>
            <br/><br/>
        </div>
    </div>

    <div id="test6">
        <div class="row">
            <div class="col s6">

                <div class="card-panel teal">
                    <span class="white-text">21. Tiene usted más interés en leer relatos sobre la vida  y obra de hombres como:   </span><br/>
                    (A).-Alejandro Magno, Julio César y Carlomagno
                    <div class="input-field inline">
                        <input  type="text" name="t21" size="5" maxlength="1">
                    </div>
                    <br/>
                    (B).-Aristóteles, Sócrates y Kant
                    <div class="input-field inline">
                        <input type="text" name="x21" size="5" maxlength="1" >
                    </div>
                </div>
                <br/><br/>

                <div class="card-panel teal">
                    <span class="white-text">22. Nuestro actual desarrollo industrial y científico es muestra de mayor grado de civilización que  el alcanzado por cualquiera otra sociedad de  tiempos anteriores, por ejemplo los griegos: </span><br/>
                    (A).-SI
                    <div class="input-field inline">
                        <input  type="text" name="r22" size="5" maxlength="1">
                    </div>
                    <br/>
                    (B).-NO
                    <div class="input-field inline">
                        <input type="text" name="z22" size="5" maxlength="1" >
                    </div>
                </div>
                <br/>

                <div class="card-panel teal">
                    <span class="white-text">23. Si estuviera empleado en una organización  industrial y suponiendo que los sueldos fueran  iguales preferiría usted ser: </span><br/>
                    (A).-Consejero de empleados
                    <div class="input-field inline">
                        <input  type="text" name="s23" size="5" maxlength="1">
                    </div>
                    <br/>
                    (B).-Tener un puesto administrativo
                    <div class="input-field inline">
                        <input type="text" name="t23" size="5" maxlength="1" >
                    </div>
                </div>
                <br/><br/>

                <div class="card-panel teal">
                    <span class="white-text">24. Si de dos  libros tuviese que elegir uno,  cuál de los siguientes escogería:  </span><br/>
                    (A).-Historia de la religión en México
                    <div class="input-field inline">
                        <input  type="text" name="t24" size="5" maxlength="1">
                    </div>
                    <br/>
                    (B).-Historia del desarrollo industrial en México
                    <div class="input-field inline">
                        <input type="text" name="x24" size="5" maxlength="1" >
                    </div>
                </div>
                <br/>

                <div class="card-panel teal">
                    <span class="white-text">25. Aprovecharía más a la sociedad moderna: </span><br/>
                    (A).-Mayor preocupación por los derechos y
                    bienestar de los ciudadanos
                    <div class="input-field inline">
                        <input  type="text" name="r25" size="5" maxlength="1">
                    </div>
                    <br/>
                    (B).-Mayor conocimiento de las leyes
                    fundamentales del comportamiento humano
                    <div class="input-field inline">
                        <input type="text" name="s25" size="5" maxlength="1" >
                    </div>
                </div>
                <br/>
            </div>

            <div class="col s6">
                <div class="row">
                </div>

                <div class="card-panel teal">
                    <span class="white-text">26. Si usted estuviera en condiciones propicias  para elevar el nivel de vida o para modificar la  opinión pública según sus deseos preferiría  utilizar su influencia para:  </span><br/>
                    (A).-Elevar el nivel de vida
                    <div class="input-field inline">
                        <input  type="text" name="x26" size="5" maxlength="1">
                    </div>
                    <br/>
                    (B).-Influenciar la opinión pública
                    <div class="input-field inline">
                        <input type="text" name="z26" size="5" maxlength="1" >
                    </div>
                </div>
                <br/>

                <div class="card-panel teal">
                    <span class="white-text">27. Si escuchara una serie de conferencias populares, sobre qué tema las preferiría:  </span><br/>
                    (A).-El progreso de los servicios sociales en la
                    ciudad donde usted reside
                    <div class="input-field inline">
                        <input  type="text" name="r27" size="5" maxlength="1">
                    </div>
                    <br/>
                    (B).-Pintores contemporáneos
                    <div class="input-field inline">
                        <input type="text" name="y27" size="5" maxlength="1" >
                    </div>
                </div>
                <br/>

                <div class="card-panel teal">
                    <span class="white-text">28. La evidencia acumulada hasta ahora parece demostrar que el universo se ha desarrollado  hasta su elevado estado actual de acuerdo con  leyes naturales de la manera que no sería  necesario recurrir a una causa primera, propósito  cósmico  o divinidad para explicarlos: </span><br/>
                    (A).-Estoy de acuerdo
                    <div class="input-field inline">
                        <input  type="text" name="s28" size="5" maxlength="1">
                    </div>
                    <br/>
                    (B).-Estoy en desacuerdo
                    <div class="input-field inline">
                        <input type="text" name="t28" size="5" maxlength="1" >
                    </div>
                </div>

                <div class="card-panel teal">
                    <span class="white-text"> 29. En un periódico como “El Universal” o  “Excélsior” que leería usted con mayor interés </span><br/>
                    (A).-Los anuncios de compra y venta de casas y
                    precios del mercado
                    <div class="input-field inline">
                        <input  type="text" name="x29" size="5" maxlength="1">
                    </div>
                    <br/>
                    (B).-La información sobre galerías de pinturas
                    <div class="input-field inline">
                        <input type="text" name="y29" size="5" maxlength="1" >
                    </div>
                </div>

                <div class="card-panel teal">
                    <span class="white-text"> 30. Qué  considera usted más importante en  el desarrollo de la educación de sus hijos? </span><br/>
                    (A).- La religión
                    <div class="input-field inline">
                        <input  type="text" name="t30" size="5" maxlength="1">
                    </div>
                    <br/>
                    (B).-La educación Física
                    <div class="input-field inline">
                        <input type="text" name="z30" size="5" maxlength="1" >
                    </div>
                </div>

            </div>

        </div>
        <center> <a href="/tercero" class="waves-effect waves-light btn-large"><i class="material-icons right">done</i>CONTINUAR</a></center>
        <br/><br/>
    </div>
</div>

</div>
<br/><br/>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


@stop
