@extends('main')
@section('content')

<section id="main-container">
    <div class="container"> </div>
    <div class="row">
        <div class="col s10 push-s1"> </div>
       <div class="row">
       <br/>
           <div class="col m5 push-m2 hide-on-small-only">

               <img src="{{asset('images/escudo.png')}}">
           </div>
           <div class="col s12 m6 push-m1">
               <div class="row">
                   <div class="signup-box">
                   <h1 class="TEST">TEST DE ORIENTACION VOCACIONAL</h1>
                    <form  class="signup-form" method="GET"  role="form" action="/registro" >
                        {{ csrf_field() }}

                        <h2 class="registrate">REGISTRATE</h2><br/>

                       <div class="divider"></div>
                       <div class="section">
                           <div class="input-field col s12">
                               <i class="material-icons prefix">account_circle</i>
                               <input title="Se necesita un nombre" id="icon_prefix" type="text" class="validate" name="nombre" required="nombre">
                               <label for="icon_prefix">NOMBRE COMPLETO:</label>

                           </div>
                               <br/><br/>
                               <br/><br/>

                               <i class="material-icons prefix">supervisor_account</i>
                              SEXO:
                           <input  name="interes" type="radio" id="masculino" value="masculino">
                           <label for="masculino">MASCULINO </label>
                           <input name="interes"  type="radio" id="femenino" value="femenino">
                           <label for="femenino">FEMENINO </label><br/><br/><br/>

                    
                         <div class="input-field col s12">
                         <i class="material-icons prefix">email</i>
                          <input id="email" type="email" class="validate" name="email" required="email">
                           <label for="email">Email</label>
                               </div>

                           <div class="input-field col s12">
                               <i class="material-icons prefix">location_on</i>
                               <input id="icon_prefix1" type="text" class="validate" name="lugar_origen" required="lugar_origen">
                               <label for="icon_prefix1">LUGAR DE ORIGEN:</label>

                           </div><br/>


                           <div class="input-field col s12">
                               <i class="material-icons prefix">phone</i>
                               <input id="icon_prefix2" type="text" class="validate" name="tel_casa" required="tel_casa" required="tel_casa">
                               <label for="icon_prefix2">TELEFONO DE CASA:</label>
                           </div><br/>
                           <div class="input-field col s12">
                               <i class="material-icons prefix">speaker_phone</i>
                               <input id="icon_prefix3" type="text" class="validate" name="tel_cel" requerid="tel_cel" required="tel_cel">
                               <label for="icon_prefix3">TELEFONO CELULAR:</label>
                           </div>
                           <br/> <br/>
                           <i class="material-icons prefix">business</i>
                           ESCUELA DE PROCEDENCIA : <br/>
                           <select name="esc_proc" required="esc_proc">
                            <option value="" disabled selected>Selecciona una opcion</option>
                            <option value="ESCUELA DE BACHILLERES UNIDAD Y TRABAJO">ESCUELA DE BACHILLERES UNIDAD Y TRABAJO</option>
                            <option value="ESCUELA DE BACHILLERES CONSTITUCION DE 1917">ESCUELA DE BACHILLERES CONSTITUCION DE 1917</option>
                            <option value="ESCUELA DE BACHILLERES ALBERT EINSTEIN">ESCUELA DE BACHILLERES ALBERT EINSTEIN</option>
                            <option value="ESCUELA DE BACHILLERES EXPERIMENTAL">ESCUELA DE BACHILLERES "EXPERIMENTAL"</option>
                            <option value="TELEBACHILLERATO LAS TRANCAS">TELEBACHILLERATO LAS TRANCAS</option>
                            <option value="COLEGIO TERESITAS A.C. TURNO MATUTINO">COLEGIO TERESITAS A.C. TURNO MATUTINO</option>
                            <option value="ESCUELA DE BACHILLERES ACELA SERVIN">ESCUELA DE BACHILLERES ACELA SERVIN</option>
                            <option value="ESCUELA DE BACHILLERES RICARDO FLORES MAGON (OFICIAL)">ESCUELA DE BACHILLERES RICARDO FLORES MAGON (OFICIAL)</option>
                            <option value="INSTITUTO CIENTIFICO MOTOLINA">INSTITUTO CIENTIFICO MOTOLINA</option>
                            <option value="CBTIS No. 13">CBTIS No. 13</option>
                            <option value="ILUESTRE COLEGIO SANTIAGO DE COMPOSTELA">ILUESTRE COLEGIO SANTIAGO DE COMPOSTELA</option>
                            <option value="COBAEV No. 35">COBAEV No. 35</option>
                            <option value="ESCUELA DE BACHILLERES LIC. ANTONIO MARIA DE RIVERA">ESCUELA DE BACHILLERES "LIC. ANTONIO MARIA DE RIVERA"</option>
                            <option value="COLEGIO MORELOS">COLEGIO MORELOS</option>
                            <option value="INSTITUTO MIGUEL DE CERVANTES SAAVEDRA">INSTITUTO MIGUEL DE CERVANTES SAAVEDRA</option>
                            <option value="INSTITUTO EDUCATIVO INSURGENTES">INSTITUTO EDUCATIVO INSURGENTES</option>
                            <option value="ESCUELA DE BACHILLERES ARTICULO 3° CONSTITUCIONAL">ESCUELA DE BACHILLERES ARTICULO 3° CONSTITUCIONAL</option>
                            <option value="INSTITUTO FRANCISCO VITORIA">INSTITUTO FRANCISCO VITORIA</option>
                            <option value="INSTITUTO EDUCATIVO XALAPEÑO">INSTITUTO EDUCATIVO XALAPEÑO</option>
                            <option value="CENTRO EDUCATIVO SIGLO XXI">CENTRO EDUCATIVO SIGLO XXI</option>
                            <option value="COLEGIO PREPARATORIO DE XALAPA">COLEGIO PREPARATORIO DE XALAPA</option>
                            <option value="COLEGIO DE BACHILLERES ATENEA ÁNIMAS">COLEGIO DE BACHILLERES ATENEA ÁNIMAS</option>
                            <option value="INSTITUTO FRANCISCO XAVIER ALEGRE">INSTITUTO FRANCISCO XAVIER ALEGRE</option>
                            <option value="ESCUELA DE BACHIERES LIC. ANGEL CARVAJAL">ESCUELA DE BACHIERES LIC. ANGEL CARVAJAL</option>
                            <option value="ESCUELA DE BACHILLERES SIMON BOLIVAR">ESCUELA DE BACHILLERES SIMON BOLIVAR</option>
                            <option value="CENTRO DE ESTUDIOS TECNOLOGICOS INDUSTRIAL Y DE SERVICIOS 134">CENTRO DE ESTUDIOS TECNOLOGICOS INDUSTRIAL Y DE SERVICIOS 134</option>
                            <option value="INSTITUTO TECNOLOGICO ROOSEVELT">INSTITUTO TECNOLOGICO ROOSEVELT</option>
                            <option value="BACHILLERES UPAV">BACHILLERES UPAV</option>
                            <option value="LICEO DE ARTES Y OFICIOS A.C. CHEDRAUI">LICEO DE ARTES Y OFICIOS A.C. CHEDRAUI</option>
                            <option value="TEBAEV ALTO LUCERO">TEBAEV ALTO LUCERO</option>
                            <option value="TEBAEV SANTA ANNA">TEBAEV SANTA ANNA</option>
                            <option value="TEBAEV MESA DE GUADALUPE">TEBAEV MESA DE GUADALUPE</option>
                            <option value="TEBAEV TRAPICHE DEL ROSARIO">TEBAEV TRAPICHE DEL ROSARIO</option>
                            <option value="COBAEV COSAUTLAN">COBAEV COSAUTLAN</option>
                            <option value="BACHILLERES TEOCELO">BACHILLERES TEOCELO</option>
                            <option value="ESCUELA DE BACHILLERES XICO">ESCUELA DE BACHILLERES XICO</option>
                            <option value="COLEGIO LAS HAYAS COATEPEC, VER.">COLEGIO LAS HAYAS COATEPEC, VER.</option>
                            <option value="ESCUELA DE BACHILLERES COATEPEC COATEPEC, VER.">ESCUELA DE BACHILLERES COATEPEC COATEPEC, VER.</option>
                            <option value="COLEGIO MÉXICO COATEPEC, VER.">COLEGIO MÉXICO COATEPEC, VER.</option>
                            <option value="ESCUELA DE BACHILLERES JOAQUIN RAMIREZ CABAÑAS COATEPEC, VER.">ESCUELA DE BACHILLERES JOAQUIN RAMIREZ CABAÑAS COATEPEC, VER.</option>
                            <option value="COLEGIO SANTO DOMINGO COATEPEC, VER.">COLEGIO SANTO DOMINGO COATEPEC, VER.</option>
                            <option value="MI BACHILLERATO NO APARECE EN LA LISTA">MI BACHILLERATO NO APARECE EN LA LISTA</option>

                           </select>
                           <br/>

                              <div class="input-field col s12">
                               <i class="material-icons prefix">not_interested</i>
                               <input  id="icon_prefix" type="text" class="validate" name="no_esta">
                               <label for="icon_prefix">NOMBRE DEL BACHILLERAtO(en caso que no este en la lista)</label>
                               </div>
                                      
                           <br/><br/>


                           <i class="material-icons prefix">list</i>

                           CARRERA DE INTERES 1 : <br/>
                           <select name="carr_1" required="carr_1">
                               <option value="" disabled selected>Selecciona una opcion</option>
                               <option value="ADMINISTRACION DE EMPRESAS">ADMINISTRACION DE EMPRESAS</option>
                               <option value="ADMINISTRACION DE HOTELES Y RESTAURANTES">ADMINISTRACION DE HOTELES Y RESTAURANTES</option>
                               <option value="ADMINISTRACION DE NEGOCIOS INTERNACIONALES">ADMINISTRACION DE NEGOCIOS INTERNACIONALES</option>
                               <option value="AGRONEGOCIOS">AGRONEGOCIOS</option>
                               <option value="ARQUITECTURA">ARQUITECTURA</option>
                               <option value="BANCA Y FINANZAS">BANCA Y FINANZAS</option>
                               <option value="CIENCIAS DE LA COMUNICACIÓN"> CIENCIAS DE LA COMUNICACIÓN</option>
                               <option value="CIENCIAS DE LA EDUCACIÓN">CIENCIAS DE LA EDUCACIÓN</option>
                               <option value="CIENCIAS POLITICAS Y ADMINISTRACION PÚBLICA">CIENCIAS POLITICAS Y ADMINISTRACION PÚBLICA</option>
                               <option value="CONTADURÍA PÚBLICA">CONTADURÍA PÚBLICA</option>
                               <option value="DERECHO">DERECHO</option>
                               <option value="DISEÑO GRÁFICO">DISEÑO GRÁFICO</option>
                               <option value="DISEÑO DE MODAS">DISEÑO DE MODAS</option>
                               <option value="EDUCACION FISICA Y NUTRICION DEPORTIVA">EDUCACION FISICA Y NUTRICION DEPORTIVA</option>
                               <option value="GASTRONOMÍA">GASTRONOMÍA</option>
                               <option value="INGENIERIA EN MECATRONICA">INGENIERIA EN MECATRONICA</option>
                               <option value="INGENIERÍA EN SISTEMAS COMPUTACIONALES">INGENIERÍA EN SISTEMAS COMPUTACIONALES</option>
                               <option value="INGENIERIA INDUSTRIAL">INGENIERIA INDUSTRIAL</option>
                               <option value="MERCADOTECNIA">MERCADOTECNIA</option>
                               <option value="PERIODISMO Y MEDIOS DE INFORMACIÓN">PERIODISMO Y MEDIOS DE INFORMACIÓN</option>
                               <option value="PSICOLOGIA">PSICOLOGIA</option>
                               <option value="PUBLICIDAD Y RELACIONES PÚBLICAS">PUBLICIDAD Y RELACIONES PÚBLICAS</option>
                               <option value="RELACIONES INDUSTRIALES">RELACIONES INDUSTRIALES</option>
                               <option value="SISTEMAS COMPUTACIONALES ADMINISTRATIVOS">SISTEMAS COMPUTACIONALES ADMINISTRATIVOS</option>
                               <option value="TURISMO">TURISMO</option>
                           </select>
                              <br/><br/>
                             
                               <i class="material-icons prefix">list</i>
                           CARRERA DE INTERES 2 : <br/>
                           <select name="carr_2" required="carr_2">
                               <option value="" disabled selected>Selecciona una opcion</option>
                                <option value="ADMINISTRACION DE EMPRESAS">ADMINISTRACION DE EMPRESAS</option>
                               <option value="ADMINISTRACION DE HOTELES Y RESTAURANTES">ADMINISTRACION DE HOTELES Y RESTAURANTES</option>
                               <option value="ADMINISTRACION DE NEGOCIOS INTERNACIONALES">ADMINISTRACION DE NEGOCIOS INTERNACIONALES</option>
                               <option value="AGRONEGOCIOS">AGRONEGOCIOS</option>
                               <option value="ARQUITECTURA">ARQUITECTURA</option>
                               <option value="BANCA Y FINANZAS">BANCA Y FINANZAS</option>
                               <option value="CIENCIAS DE LA COMUNICACIÓN">CIENCIAS DE LA COMUNICACIÓN</option>
                               <option value="CIENCIAS DE LA EDUCACIÓN">CIENCIAS DE LA EDUCACIÓN</option>
                               <option value="CIENCIAS POLITICAS Y ADMINISTRACION PÚBLICA">CIENCIAS POLITICAS Y ADMINISTRACION PÚBLICA</option>
                               <option value="CONTADURÍA PÚBLICA">CONTADURÍA PÚBLICA</option>
                               <option value="DERECHO">DERECHO</option>
                               <option value="DISEÑO GRÁFICO">DISEÑO GRÁFICO</option>
                               <option value="DISEÑO DE MODAS">DISEÑO DE MODAS</option>
                               <option value="EDUCACION FISICA Y NUTRICION DEPORTIVA">EDUCACION FISICA Y NUTRICION DEPORTIVA</option>
                               <option value="GASTRONOMÍA">GASTRONOMÍA</option>
                               <option value="INGENIERIA EN MECATRONICA">INGENIERIA EN MECATRONICA</option>
                               <option value="INGENIERÍA EN SISTEMAS COMPUTACIONALES">INGENIERÍA EN SISTEMAS COMPUTACIONALES</option>
                               <option value="INGENIERIA INDUSTRIAL">INGENIERIA INDUSTRIAL</option>
                               <option value="MERCADOTECNIA">MERCADOTECNIA</option>
                               <option value="PERIODISMO Y MEDIOS DE INFORMACIÓN">PERIODISMO Y MEDIOS DE INFORMACIÓN</option>
                               <option value="PSICOLOGIA">PSICOLOGIA</option>
                               <option value="PUBLICIDAD Y RELACIONES PÚBLICAS">PUBLICIDAD Y RELACIONES PÚBLICAS</option>
                               <option value="RELACIONES INDUSTRIALES">RELACIONES INDUSTRIALES</option>
                               <option value="SISTEMAS COMPUTACIONALES ADMINISTRATIVOS">SISTEMAS COMPUTACIONALES ADMINISTRATIVOS</option>
                               <option value="TURISMO">TURISMO</option>
                           </select>
                           
                              <br/><br/>
                                  <h5>¿Desea recibir informacion de becas? </h5>
                           <input  name="desea_inf" type="radio" id="si" value="si">
                           <label for="si">SI </label>
                           <input name="desea_inf"  type="radio" id="no" value="no">
                           <label for="no">NO</label><br/><br/><br/>

                            
                                    <br/>
                                <div class="row">
                                 <div class="login-box">
                                 
                                    <center><input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                                     <label for="filled-in-box">¿Aceptas terminos y condiciones?<a class="modal-trigger waves-effect waves-light " href="#Modal1"> Leer</a></label></center>
                                     <div class="modal" id="Modal1">
                                       <h4>Terminos y condiciones</h4>
                                       <p>Los siguientes términos y condiciones (los "Términos y Condiciones") rigen el uso que usted le dé a este sitio web y a cualquiera de los contenidos disponibles por o a través de este sitio web, incluyendo cualquier contenido derivado del mismo (el "Sitio Web"). Time Inc. ("Time Inc." o "nosotros") ha puesto a su disposición el Sitio Web. Podemos cambiar los Términos y Condiciones de vez en cuando, en cualquier momento sin ninguna notificación, sólo publicando los cambios en el Sitio Web. AL USAR EL SITIO WEB, USTED ACEPTA Y ESTÉ DE ACUERDO CON ESTOS TÉRMINOS Y CONDICIONES EN LO QUE SE REFIERE A SU USO DEL SITIO WEB. Si usted no está de acuerdo con estos Términos y Condiciones, no puede tener acceso al mismo ni usar el Sitio Web de ninguna otra manera.<br/><br/>
 
1.         Derechos de Propiedad. Entre usted y Time Inc., Time Inc. es dueño único y exclusivo, de todos los derechos, título e intereses en y del Sitio Web, de todo el contenido (incluyendo, por ejemplo, audio, fotografías, ilustraciones, gráficos, otros medios visuales, videos, copias, textos, software, títulos, archivos de Onda de choque, etc.), códigos, datos y materiales del mismo, el aspecto y el ambiente, el diseño y la organización del Sitio Web y la compilación de los contenidos, códigos, datos y los materiales en el Sitio Web, incluyendo pero no limitado a, cualesquiera derechos de autor, derechos de marca, derechos de patente, derechos de base de datos, derechos morales, derechos sui generis y otras propiedades intelectuales y derechos patrimoniales del mismo. Su uso del Sitio Web no le otorga propiedad de ninguno de los contenidos, códigos, datos o materiales a los que pueda acceder en o a través del Sitio Web.
 </p>
                                       <div class="action-bar">
                                         
                                         <a href="#" class="btn-flat modal-action modal-close">ACEPTAR</a>
                                       </div>
                                     </div>
                                          
                                             
                                     </div>
                                  </div>


                           <button type="submit" value="enviar" class="waves-effect waves-light btn-large">  <i class="material-icons prefix">account_circle</i>enviar</button>

                           <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                       </div>
                   </form>
                   </div>
               </div>
           </div>
       </div>
    </div>
</section>
@stop
