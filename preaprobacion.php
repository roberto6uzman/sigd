<?php
session_start();
$usuario=$_SESSION['usuario'];


if ((!isset($_SESSION['usuario']))) 
{
header("location: ../index.html");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>Concurso de Ensayo Político 2017</title>
  <link rel="icon" type="image/png" href="../../images/logo.png" /> 

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../../css/iframe.css">

    <!-- Librerias de Alertify -->
  <link rel="stylesheet" href="../../css/alertify.css"/>
  <link rel="stylesheet" href="../../css/themes/semantic.css"/>
  <script src="../../js/alertify.js"></script>
	<!-- Libreria de Jquery -->
	<script src="../../js/jquery.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Concurso Estatal de Ensayo Político 2017</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="../index.html"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="graficas.php"><i class="fa fa-dashboard fa-fw"></i> Gráficas</a>
                        </li>

                        <li>
                            <a href="sindocumentos.php"><i class="glyphicon glyphicon-remove"></i> Inscritos sin documentación</a>
                        </li>
                        <li>
                            <a href="preaprobacion.php"><i class="glyphicon glyphicon-flash"></i> Preaprobación</a>
                        </li>
                        <li>
                            <a href="anulados.php"><i class="glyphicon glyphicon-ban-circle"></i> Participantes anulados</a>
                        </li>
                        <li>
                            <a href="participantes.php"><i class="glyphicon glyphicon-ok"></i> Participantes aprobados</a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"></h1>
                    </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" align="center">
                            <strong>Preaprobación de participantes</strong>
                        </div>
                        <!-- /.inicia parte izquierda -->
                        <div class="col-lg-6">
                                    <div class="form-group">
                                        </div>
                            </div>
                        <!-- /.finaliza parte izquierda -->

                        <!-- /.inicia ingrese nombre -->
                        <div class="col-lg-6">
                                    <div class="form-group label">
                                            <label>Para buscar ingrese nombre</label>
                                        </div>
                            </div>
                        <!-- /.finaliza ingrese nombre -->
                        
                        <div class="panel-body table-responsive">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th class="titulotabla">ID participante</th>
                        <th class="titulotabla">Nombre</th>
                        <th class="titulotabla">Primer Apellido</th>
                        <th class="titulotabla">Segundo Apellido</th>
                        <th class="titulotabla">Fecha de nacimiento</th>
                        <th class="titulotabla">Edad</th>
                        <th class="titulotabla">CURP</th>
                        <th class="titulotabla">Email</th>
                        <th class="titulotabla">Institución</th>
                        <th class="titulotabla">Tema</th>
                        <th class="titulotabla">Titulo</th>
                        <th class="titulotabla">Descargar formulario</th>
                        <th class="titulotabla">Ver carpeta</th>
                        <th class="titulotabla">Aprobar</th>
                        <th class="titulotabla">Anular</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
    //creamos connection
    $mysqli = new mysqli ("mysql.hostinger.mx","u128080587_cep17","ensayopolitico17","u128080587_cep17");
    //mysql_set_charset('utf8');
    //$mysqli = new mysqli ("127.0.0.1","user","password","database", 3306);
    if ($mysqli->connect_errno) {
        echo "NO PUDO SELECCIONARSE LA BD." . $mysqli->connect_errno . ")" .$mysqli->connect_error;
    }
                                $query = "SELECT r.idregistro, r.idparticipante,r.idjurado,r.nombre,r.primer,r.segundo,r.nacimiento,r.edad,r.curp,r.email,r.institucion_idinstitucion,r.carpeta,r.temas_idtemas,r.titulo,r.status,t.idtemas,t.temas,i.idinstitucion,i.nombre AS 'institucion' FROM registro r INNER JOIN temas t
                                ON r.temas_idtemas=t.idtemas INNER JOIN institucion i ON r.institucion_idinstitucion=i.idinstitucion WHERE r.status='DOCUMENTOS_ANEXADOS' GROUP BY idparticipante ORDER BY nombre DESC";
                                $result = $mysqli->query($query);
                                $var1=0;
                                $var2=0;
            if( $result = $mysqli->query( $query ) ) {
    // $result->fetch_object() devolverá un objeto, así: $row = $result->fetch_object; $row->Nombre; $row->Apellidos (cada propiedad será un nombre de columna)
    // $result->fetch_assoc() devolverá un array asociativo (mapa clave valor): $row['Nombre'], $row['Apellidos']
    // $result->fetch_row() devuelve un array numerado: $row[0] (sería el nombre o la primera columna), $row[1], etc.
            while( $row = $result->fetch_assoc() ) {
            	$carpeta=$row['carpeta'];
            	$idparticipante=$row['idparticipante'];
            	$nombre=$row['nombre'];
            	$primer=$row['primer'];
            	$segundo=$row['segundo'];
            	$temas=$row['temas'];
            	$idregistro=$row['idregistro'];
            	$email=$row['email'];
              echo "<tr align=center>";
              echo "<td class=tlc>" . $row['idparticipante'] . "</td>";
              echo "<td class=tlc>" . $row['nombre'] . "</td>";
              echo "<td class=tlc>" . $row['primer'] . "</td>";
              echo "<td class=tlc>" . $row['segundo'] . "</td>";
              echo "<td class=tlc>" . $row['nacimiento'] . "</td>";
              echo "<td class=tlc>" . $row['edad'] . "</td>";
              echo "<td class=tlc>" . $row['curp'] . "</td>";
              echo "<td class=tlc>" . $row['email'] . "</td>";
              echo "<td class=tlc>" . $row['institucion'] . "</td>";
              echo "<td class=tlc>" . $row['temas'] . "</td>";
              echo "<td class=tlc>" . $row['titulo'] . "</td>";
              echo "<td class=tlc align=center><a type='button'  href='../pdf/formulario.php?id=".$row['idregistro']."' target='_blank'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></a></td>";
              echo "<td class=tlc align=center><a type='button'  data-toggle='modal' data-target='#consulta-".$row['carpeta']."'><span class='glyphicon glyphicon-folder-open' aria-hidden='true'></span></a></td>";
              echo "<td class=tlc align=center><a type='button'  data-toggle='modal' data-target='#aprobar-".$row['idregistro']."'><span class='glyphicon glyphicon-ok' aria-hidden='true'></span></a></td>";
              echo "<td class=tlc align=center><a type='button'  data-toggle='modal' data-target='#anular-".$row['idregistro']."'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a></td>";
              echo "</tr>";
               


        ?>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="consulta-<?php echo $carpeta;?>" tabindex="-<?php echo $carpeta;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Documentación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body embed-container">
        <iframe src="../../upload_folder/<?php echo $carpeta;?>" name="documentos"  id="documentos" framedorber="1">Tu navegador no soporta iframes</iframe>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary"  onclick="refreshIframe();">Regresar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="aprobar-<?php echo $row['idregistro'];?>" tabindex="-<?php echo $row['idregistro'];?>" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Aprobar documentación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3 align="center">Estas seguro que deseas aprobar la documentación de: </h3> <h3 align="center" style="color:orange;"><strong><?php echo $nombre;?> <?php echo $primer;?> <?php echo $segundo;?></strong></h3> <h3 align="center" >con el tema:</h3><em><h3 align="center" style="color:orange;"><?php echo $temas;?></em></h3> <input type="text" id="idregistroinpu" name="idregistroinpu" value="<?php echo $row['idregistro'];?>" style="visibility:hidden; display: none;" /> <input type="text" id="nombreinput" name="nombreinput" value="<?php echo $row['nombre'];?>" style="visibility:hidden; display: none;" /> <input type="text" id="primerinput" name="primerinput" value="<?php echo $row['primer'];?>" style="visibility:hidden; display: none;" /> <input type="text" id="segundoinput" name="segundoinput" value="<?php echo $row['segundo'];?>" style="visibility:hidden; display: none;" /> <input type="text" id="temasinput" name="temasinput" value="<?php echo $row['temas'];?>" style="visibility:hidden; display: none;" /><input type="text" id="idparticipanteinput" name="idparticipanteinput" value="<?php echo $row['idparticipante'];?>" style="visibility:hidden; display: none;" /> <input type="text" id="emailinput" name="emailinput" value="<?php echo $row['email'];?>" style="visibility:hidden; display: none;" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success aprobar">Confirmar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="anular-<?php echo $row['idregistro'];?>" tabindex="-<?php echo $row['idregistro'];?>" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Anular documentación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3 align="center">Estas seguro que deseas anular la documentación de: </h3> <h3 align="center" style="color:orange;"><strong><?php echo $nombre;?> <?php echo $primer;?> <?php echo $segundo;?></strong></h3> <h3 align="center" >con el tema:</h3><em><h3 align="center" style="color:orange;"><?php echo $temas;?></em></h3> <input type="text" id="idregistroinput" name="idregistroinput" value="<?php echo $row['idregistro'];?>" style="visibility:hidden; display: none;" /> <input type="text" id="nombreinput" name="nombreinput" value="<?php echo $row['nombre'];?>" style="visibility:hidden; display: none;" /> <input type="text" id="primerinput" name="primerinput" value="<?php echo $row['primer'];?>" style="visibility:hidden; display: none;" /> <input type="text" id="segundoinput" name="segundoinput" value="<?php echo $row['segundo'];?>" style="visibility:hidden; display: none;" /> <input type="text" id="temasinput" name="temasinput" value="<?php echo $row['temas'];?>" style="visibility:hidden; display: none;" /><input type="text" id="idparticipanteinput" name="idparticipanteinput" value="<?php echo $row['idparticipante'];?>" style="visibility:hidden; display: none;" /> <input type="text" id="emailinput" name="emailinput" value="<?php echo $row['email'];?>" style="visibility:hidden; display: none;" /> <hr>
        <textarea class="form-control" id="motivo" name="motivo" rows="5" maxlength="450" placeholder="Describa motivo de anulación" onkeyup="count_down(this);"></textarea>
        <p id="count2">450</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger anular">Confirmar</button>
      </div>
    </div>
  </div>
</div>


<?php
} }
?><!-- cierra datos -->
                    </tbody>
                            </table>
                        </div>            
                    </div>
                </div>
            </div>
            </div>



                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

     <!--JS PARA APROBAR REGISTRO-->
    <script src="../js/aprobar.js"></script>

     <!--JS PARA ANULAR REGISTRO-->
    <script src="../js/anular.js"></script>

    <!--sript tabla-->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
    <!-- finaliza sript tabla-->

<script>
function refreshIframe() {
    var ifr = document.getElementsByName('documentos')[0];
    ifr.src = ifr.src;
}
</script>


<script>

        function count_down(obj) {
            
            var element = document.getElementById('count2');
            
            element.innerHTML = 450 - obj.value.length;
            
            if (450 - obj.value.length < 0) {
                element.style.color = 'red';
            
            } else {
                element.style.color = 'grey';
            }
            
        }
</script>

</body>

</html>
