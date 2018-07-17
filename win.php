<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Concurso de Ensayo Político 2017</title>
  <link rel="icon" type="image/png" href="images/logo.png" /> 
  
            <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>  
      <link rel="stylesheet" href="css/style.css">

          <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

<!-- date picker -->
    <link href="css/bootstrap-datetimepicker.css" rel="stylesheet" media="screen">

<!-- CURP CSS -->
    <link href="css/curp.css" rel="stylesheet">
    <!-- Librerias de Alertify -->
  <link rel="stylesheet" href="css/alertify.css"/>
  <link rel="stylesheet" href="css/themes/semantic.css"/>
  <script src="js/alertify.js"></script>
	<!-- Libreria de Jquery -->
	<script src="js/jquery.js"></script>

<!--file css-->
    <link rel="stylesheet" href="css/file.css">

</head>
  <!--inicia select php-->
<?php
    include('conexion/conexion.php');

    $sql2 = "SELECT idmunicipios,nombre FROM municipios ORDER BY nombre asc";
    /*AGREGAR FILAS*/
    $result2 = $mysqli->query($sql2);
        //CERRAR LA CONEXION
    $mysqli->close();
?>
<!--finaliza select php-->

  <!--inicia select php-->
<?php
    include('conexion/conexion.php');

    $sql3 = "SELECT idinstitucion,nombre FROM institucion ORDER BY nombre asc";
    /*AGREGAR FILAS*/
    $result3 = $mysqli->query($sql3);
        //CERRAR LA CONEXION
    $mysqli->close();
?>
<!--finaliza select php-->

  <!--inicia select php-->
<?php
    include('conexion/conexion.php');

    $sql4 = "SELECT idtemas,temas FROM temas ORDER BY temas asc";
    /*AGREGAR FILAS*/
    $result4 = $mysqli->query($sql4);
        //CERRAR LA CONEXION
    $mysqli->close();
?>
<!--finaliza select php-->
<body>

<div class="overlay col-lg-12"  >
  <div class="wrap">
   <img src="images/logo.png" width="100%" height="auto" alt="">
  </div>

  <div style="margin-top: 5%;"></div>

<div class="col-lg-4" align="center" style="margin-top: 1%;" >
     <div id="app" data-toggle="modal" data-target="#btnconvocatoria"></div> 
</div>

<div class="col-lg-4" align="center" style="margin-top: 1%;">
     <div id="app3" data-toggle="modal" data-target="#btndocbasicos" ></div>
</div>

<div class="col-lg-4" align="center" style="margin-top: 1%;">
     <div id="app2" data-toggle="modal" data-target="#btnparticipar" data-keyboard="false" data-backdrop="static" onclick="mensaje()"></div>
</div>

<div class="col-lg-12" align="center" style="margin-top: 2%; margin-bottom: 5%;">
     <div id="app4"  data-toggle="modal" data-target="#btncontacto"></div>
</div>

</div>
<footer>
  <img src="images/footer.png" class="img-responsive" alt="">
</footer>

<!-- Modal ver convocatoria -->
<div class="modal fade" id="btnconvocatoria" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        
      </div>
      <div class="modal-body" style="text-align: center;">

 <object data="convocatoria/convocatoria.pdf" type="application/pdf" width="100%" height="800px"> 
  <h2>Al parecer tu navegador no cuenta con un visualizador de PDF <a href="convocatoria/convocatoria.pdf">Haz click aquí para descargar el PDF</a></h2>  
 </object>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>


<!-- Modal documentos básicos -->
<div class="modal fade" id="btndocbasicos" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title" style="text-align: center;"><strong>Descarga documentos básicos</strong></h3>
      </div>
      <div class="modal-body col-lg-12" align="center">

	<h4 align="center">Descargar bases de convocatoria</h4>
	<a type="button" class="btn btn-success" href="documentos/Convocatoria_Concurso_de_Ensayo_2017.pdf" target="_BLANK"><span class="glyphicon glyphicon-arrow-down"></span> Descargar</a>

	<h4 align="center">Descargar carta de autorización</h4>
	<a type="button" class="btn btn-success" href="documentos/Carta_de _Autorización_2017.docx" target="_BLANK"><span class="glyphicon glyphicon-arrow-down"></span> Descargar</a>

	<h4 align="center">Descargar criterios editoriales</h4>
	<a type="button" class="btn btn-success" href="documentos/Criterios_editoriales.pdf" target="_BLANK"><span class="glyphicon glyphicon-arrow-down"></span> Descargar</a>

	<h4 align="center">Consulta tu CURP</h4>
	<a type="button" class="btn btn-success" href="https://consultas.curp.gob.mx/CurpSP/gobmx/inicio.jsp" target="_BLANK"><span class="glyphicon glyphicon-search"></span> Consultar</a>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal deseo participar -->
<div class="modal fade" id="btnparticipar" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title" style="text-align: center;"><strong>Deseo Participar</strong></h3>
      </div>
      <div class="modal-body col-lg-12">
      

                <form data-toggle="validator" id="formparticipar" method="post"  role="form" onclick="calcularcategoria();">

                  <div class="form-group col-lg-3">
                    <label  class=" control-label"
                              for="paterno">Nombre(s):</label>
                    <div class="">
                        <input type="text" class="form-control" 
                        id="nombre" name="nombre"/>
                    </div>
                  </div>

                  <div class="form-group col-lg-3">
                    <label  class=" control-label"
                              for="primerapellido">Primer apellido:</label>
                    <div class="">
                        <input type="text" class="form-control" 
                        id="primerapellido" name="primerapellido"/>
                    </div>
                  </div>


                  <div class="form-group col-lg-3">
                    <label  class=" control-label"
                              for="segundoapellido">Segundo apellido:</label>
                    <div class="">
                        <input type="text" class="form-control" 
                        id="segundoapellido" name="segundoapellido"/>
                    </div>
                  </div>

                  <div class="form-group col-lg-3">
                    <label  class="control-label"
                    for="nacimiento">Fecha de Nacimiento:</label>
                    <div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" id="nacimiento" name="nacimiento"  onchange="calcularedad();"  readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove" ></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                    <input type="hidden" id="dtp_input2" value="" /><br/>
                  </div>

                  <div class="form-group col-lg-2">
                    <label  class=" control-label"
                              for="edad">Edad:</label>
                    <div class="">
                        <input type="edad" class="form-control" 
                        id="edad" name="edad" disabled="" />
                    </div>
                  </div>

                  <div class="form-group col-lg-2">
                    <label  class=" control-label"
                              for="categoria">Categoría:</label>
                    <div class="">
                        <input type="categoria" class="form-control" 
                        id="categoria" name="categoria" readonly="" />
                    </div>
                  </div>

                  <div class="form-group col-lg-4">
                    <label  class="control-label"
                              for="sexo">Sexo:</label>
                    <div class="">
                        <select class="form-control" id="sexo" name="sexo" >
                        <option value="">Seleccione una Opción</option>
                          <option>Masculino</option>
                          <option>Femenino</option>
                        </select>
                    </div>
                  </div>

                  <div class="form-group col-lg-4">
                    <label  class="control-label"
                              for="curp">CURP:</label>
                    <div class="">
                        <input type="text" class="form-control" 
                        id="curp"  name="curp" oninput="validarInput(this)" maxlength="18"/>
                        <pre id="resultado"></pre>
                    </div>
                  </div>

                  <div class="form-group col-lg-4">
                    <label  class=" control-label"
                              for="correo">Correo electrónico:</label>
                    <div class="">
                        <input type="email" class="form-control" 
                        id="correo" name="correo" required/>
                    </div>
                  </div>

                  <div class="form-group col-lg-4">
                      <label class=" control-label"
                              for="telcasa">Teléfono Casa:</label>
                      <input class="form-control" id="telcasa" name="telcasa" type="tel">
                  </div>

                  <div class="form-group col-lg-4">
                      <label class=" control-label" for="telmovil">Teléfono Móvil:</label>
                      <input class="form-control" id="telmovil" name="telmovil" type="tel">
                  </div>

                  <div class="col-lg-12">
                  <hr>
                  <h4 for="" align="center"><strong>Domicilio</strong></h4>
                  </div>

                  <div class="form-group col-lg-4">
                      <label class=" control-label" for="calle">Calle:</label>
                      <input class="form-control" id="calle" name="calle" type="text">
                  </div>

                  <div class="form-group col-lg-2">
                      <label class=" control-label" for="numext">Num. Ext.:</label>
                      <input class="form-control" id="numext" name="numext" type="text" >
                  </div>

                  <div class="form-group col-lg-2">
                      <label class=" control-label" for="numint">Num. Int.:</label>
                      <input class="form-control" id="numint" name="numint" type="text">
                  </div>

                  <div class="form-group col-lg-4">
                      <label class=" control-label" for="colonia">Colonia:</label>
                      <input class="form-control" id="colonia" name="colonia" type="text">
                  </div>

                  <div class="form-group col-lg-4">
                    <label  class="control-label"
                              for="municipio">Municipio:</label>
                    <div class="">
                        <select class="form-control" id="municipio" name="municipio">
                        <option value="">Seleccione una Opción</option>
                                                                            <?php    
                                                        while ( $row = $result2->fetch_array() )    
                                                        {
                                                    ?>
                                                        <option value="<?php echo $row['idmunicipios'] ?>" >
                                                    <?php echo $row['nombre']; ?>
                                                        </option>
                                                    <?php
                                                        }    
                                                    ?> 
                        </select>
                    </div>
                  </div>

                  <div class="form-group col-lg-2">
                      <label class=" control-label" for="codigopostal">C.P.:</label>
                      <input class="form-control" id="codigopostal" name="codigopostal" type="number" maxlength="6">
                  </div>

                  <div class="col-lg-12">
                  <hr>
                  </div>

                  <div class="form-group col-lg-4">
                    <label  class="control-label"
                              for="estatusacademico">Estatus Académico:</label>
                    <div class="">
                        <select class="form-control" id="estatusacademico" name="estatusacademico">
                        <option value="">Seleccione una Opción</option>
                        <option value="Estudiante">Estudiante</option>
                        <option value="Egresado">Egresado</option>
                        <option value="Otro">Otro</option>
                        </select>
                    </div>
                  </div>                  

                  <div class="form-group col-lg-4">
                    <label  class="control-label"
                              for="nivelacademico">Nivel Académico:</label>
                    <div class="">
                        <select class="form-control" id="nivelacademico" name="nivelacademico">
                        <option value="">Seleccione una Opción</option>
                        <option value="Media Superior">Media Superior</option>
                        <option value="Superior">Superior</option>
                        <option value="Posgrado">Posgrado</option>
                        </select>
                    </div>
                  </div>    

                  <div class="form-group col-lg-4">
                      <label class=" control-label" for="especialidad">Especialidad:</label>
                      <input class="form-control" id="especialidad" name="especialidad" type="text">
                  </div>

                  <div class="form-group col-lg-4">
                      <label class=" control-label" for="grado">Grado:</label>
                      <input class="form-control" id="grado" name="grado" type="text">
                  </div>

                  <div class="form-group col-lg-4">
                    <label  class="control-label"
                              for="institucioneducativa">Institución Educativa:</label>
                    <div class="">
                        <select class="form-control" id="institucioneducativa" name="institucioneducativa">
                                                <option value="">Seleccione una Opción</option>
                                                                            <?php    
                                                        while ( $row = $result3->fetch_array() )    
                                                        {
                                                    ?>
                                                        <option value="<?php echo $row['idinstitucion'] ?>" >
                                                    <?php echo $row['nombre']; ?>
                                                        </option>
                                                    <?php
                                                        }    
                                                    ?> 
                        </select>
                    </div>
                  </div>   

                  <div class="col-lg-12">
                  <hr>
                  </div>

                  <div class="form-group col-lg-4">
                    <label  class="control-label"
                              for="encuesta">¿Cómo te enteraste de este concurso?</label>
                    <div class="">
                        <select class="form-control" id="encuesta" name="encuesta">
                        <option value="">Seleccione una Opción</option>
                        <option value="Prensa escrita">Prensa escrita</option>
                        <option value="Radio">Radio</option>
                        <option value="Televisión">Televisión</option>
                        <option value="Cartel en mi escuela">Cartel en mi escuela</option>
                        <option value="Cartel en transporte público">Cartel en transporte público</option>
                        <option value="Redes sociales">Redes sociales</option>
                        <option value="Otro">Otro</option>
                        </select>
                    </div>
                  </div>   

                  <div class="form-group col-lg-8">
                      <label class=" control-label" for="asesor">En caso de haber contado con un asesor para la elaboración de tu ensayo, escribe aquí su nombre completo:</label>
                      <input class="form-control" id="asesor" name="asesor" type="text">
                  </div>

                  <div class="form-group col-lg-12">
                    <label  class="control-label"
                              for="tema">Tema:</label>
                    <div class="">
                        <select class="form-control" id="tema" name="tema">
                        <option value="">Seleccione un tema</option>
                                                                            <?php    
                                                        while ( $row = $result4->fetch_array() )    
                                                        {
                                                    ?>
                                                        <option value="<?php echo $row['idtemas'] ?>" >
                                                    <?php echo $row['temas']; ?>
                                                        </option>
                                                    <?php
                                                        }    
                                                    ?> 
                        </select>
                    </div>
                  </div>   

                  <div class="form-group col-lg-12">
                      <label class=" control-label" for="grado">Titulo de tu ensayo:</label>
                      <input class="form-control" id="titulo" name="titulo" type="text">
                  </div>

                  <div class="col-lg-12">
                  <strong><hr style="border-top:3px solid #555; "></strong>
                  </div>

                  <div class="form-group col-lg-1">
                    <div class="">
                    <input type="checkbox" name="condicion" id="condicion" onclick="habilitarbtn()"/> 
                    </div>
                  </div> 
                  <div class="form-group col-lg-11" >
                    <label  class="control-label"
                              for="condiciones">Certifico que soy mayor de 17 años y menos de 30 años, que todos los datos proporcionados son reales y que autorizo a la Subsecretaría de Desarrollo Político de la Secretaría de Gobierno del Estado de Tabasco el procesamiento de los mismos para todo lo relativo al Concurso Estatal de Ensayo Político 2017.</label>
                  </div>  


                </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary s" id="registrarse" name="registrarse" disabled="true" >Registrarme</button>
        
      </div>
    </div>
  </div>
</div>


<!-- Modal documentos básicos -->
<div class="modal fade" id="btncontacto" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title" style="text-align: center;"><strong>Contacto</strong></h3>
      </div>
      <div class="modal-body col-lg-12" align="center">
      

                <form  id="form_conte" method="post">

                  <div class="form-group col-lg-12">
                    <div class="">
                        <input type="text" class="form-control" 
                        id="name" name="name" placeholder="Tu nombre..."/>
                    </div>
                  </div>

                  <div class="form-group col-lg-12">
                    <div class="">
                        <input type="text" class="form-control" 
                        id="email" name="email" placeholder="Tu email..."/>
                    </div>
                  </div>


                  <div class="form-group col-lg-12">
                    <div class="">
                        <textarea class="form-control" rows="4" id="message" name="message" placeholder="Tu mensaje..." ></textarea>
                    </div>
                  </div> 


                </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary enviar" id="enviar" name="enviar"><i class="fa fa-paper-plane fa-fw"></i> Enviar</button>
        
      </div>
    </div>
  </div>
</div>


<!-- Modal subir info -->
<div class="modal fade" id="subirinfo" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">

        <h3 class="modal-title" style="text-align: center;"><strong>Subir documentación</strong></h3>
      </div>
      <div class="modal-body col-lg-12" align="center">
      

                          <div class="col-md-12 col-sm-12 col-xs-12"><div id="agregar" class="participante" onClick="document.getElementById('oculto').style.visibility='visible'; document.getElementById('agregar').style.display = 'none';">Agregar</div><br></div>
                          

                      <div  style="visibility:hidden" id="oculto">
                      <form action="#" enctype="multipart/form-data" method="post">
						<input type="text" id="fileidcurp" name="fileidcurp" style="visibility:hidden; display: none;" />
						<input type="text" id="tituloid" name="tituloid" style="visibility:hidden; display: none;" />
						<input type="text" id="temaid" name="temaid" style="visibility:hidden; display: none;" />
						<input type="text" id="correoid" name="correoid" style="visibility:hidden; display: none;" />
						<input type="text" id="nombreid" name="nombreid" style="visibility:hidden; display: none;" />

                      <h2>Documentación a anexar:</h2>

                      <h4><strong>CURP, Carta de autorización y Ensayo</strong></h4> <br>
                      <h4>(Sube uno a uno cada documento.)</h4>

                      <input type="file" name="image" class="col-md-6" onclick="msg()">


                      <div class="progress progress-striped active">
                        <div class="progress-bar" style="width:0%"></div>
                      </div>     
                      <button class="btn btn-sm btn-info upload" type="submit" id="upload" name="upload" onclick="habilitarbtnlisto()" style="visibility: hidden;"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span> Subir archivo</button>                 
                    </form>
                    </div> <br><br><br><hr>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary listo updatestatus" id="listo" name="listo" disabled="true"><i class="glyphicon glyphicon-ok-sign" ></i> Haz click aquí cuando hayas subido todos tus archivos para finalizar tu registro</button>
        
      </div>
    </div>
  </div>
</div>

  <script src="js/react.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/primerboton.js"></script>
  <script src="js/segundoboton.js"></script>
  <script src="js/tercerboton.js"></script>
  <script src="js/cuartoboton.js"></script>

  <!--date time picker-->
  <script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.es.js" charset="UTF-8"></script>

  <!--validar curp-->
  <script src="js/curp.js"></script>

  <!--jquery mascara para telefonos-->
  <script src="js/jquery.maskedinput.js" type="text/javascript"></script>


  <!-- INSERT DATOS-->
  <script src="js/insert_datos.js"></script>


  <!--JS PARA ENVIO DE CORREO-->
  <script src="js/enviar_correo.js"></script>

   <!--JS PARA ENVIAR FILES-->
  <script src="js/files.js"></script>

   <!--JS PARA ID PATICIPANTE-->
  <script src="js/idparticipante.js"></script>

     <!--JS PARA FINALIZAR REGISTRO-->
  <script src="js/finalizaregistro.js"></script>

<script>
	function mensaje() {
		alertify.alert('Mensaje', 'Para realizar exitosamente tu registro, ten lista tu CURP, Carta de autorización y Ensayo.', function(){ alertify.success('Perfecto, puedes continuar.'); }).set('closable', false);
	}
</script>

<script>
function msg() {
    document.getElementById("upload").style.visibility = "visible";
}
</script>

  <script >
$('.form_date').datetimepicker({
        language: "es",
    startDate: "1987-01-01",
    endDate: "2000-09-01",
    autoclose: 1,
    startView: 4,
    maxViewMode: 2,
    minView: 2
});
  </script>

<!-- javascript MASCARA TEL -->
  <script>
    jQuery(function($){
   $("#telcasa").mask("(999) 999-9999");
   $("#telmovil").mask("(999) 999-9999");

  });
  </script>
<!-- finaliza javascript MASCARA TEL -->


      <!-- javascript MOSTRAR calcularedad -->
    <script type="text/javascript">

    function calcularedad () {
        var nacimiento=$("#nacimiento").val();

        $.ajax({
                    url: 'php/proceso_calcularedad.php',
                    data: {snacimiento: nacimiento},
                    type: "POST",
                    success: function (data)
                    {
                      $("#edad").empty();
                       $('#edad').val(data); 
                    }
            }
        );
    }
    </script>
    <!-- finaliza javascript MOSTRAR calcularedad -->

      <!-- javascript MOSTRAR calcularcategoria -->
    <script type="text/javascript">

    function calcularcategoria () {
        var edad=$("#edad").val();

        $.ajax({
                    url: 'php/proceso_calcularcategoria.php',
                    data: {sedad: edad},
                    type: "POST",
                    success: function (data)
                    {

                       $('#categoria').val(data); 
                    }

            }
        );

    }
    </script>
    <!-- finaliza javascript MOSTRAR calcularcategoria -->

      <!-- javascript MOSTRAR habilitarbtn -->
    <script type="text/javascript">

    function habilitarbtn () {
    if(document.getElementById('condicion').checked)
    {
        document.getElementById('registrarse').disabled=false;
    }
    else
    {
        document.getElementById('registrarse').disabled=true;
    }
}
    </script>
    <!-- finaliza javascript MOSTRAR habilitarbtn -->

      <!-- javascript MOSTRAR habilitarbtnlisto -->
    <script type="text/javascript">

    function habilitarbtnlisto () {
    if(document.getElementById('upload').click)
    {
        document.getElementById('listo').disabled=false;
    }
    else
    {

    }
}
    </script>
    <!-- finaliza javascript MOSTRAR habilitarbtnlisto -->


<script type="text/javascript">
	$(document).ready(function() {
  $('.cerrar').click(function(){
  	$('#btnparticipar').modal('hide');
      }); //Terminamos la Funcion Click
}); //Terminamos la Funcion Ready
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-106085460-1', 'auto');
  ga('send', 'pageview');

</script>


</body>

</html>
