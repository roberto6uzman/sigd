<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte_Aprobados.xls");


include('../../conexion/conexion.php'); # Configuracion de la Web(Base de Datos)


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORTE CONCURSO ENSAYO POLÍTICO</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6" bgcolor="orange"><CENTER><strong>REPORTE CONCURSO ENSAYO POLÍTICO</strong></CENTER></td>
  </tr>
  <tr bgcolor="red">
                        <td class="titulotabla"><strong>ID participante</strong></td>
                        <td class="titulotabla"><strong>Nombre</strong></td>
                        <td class="titulotabla"><strong>Primer Apellido</strong></td>
                        <td class="titulotabla"><strong>Segundo Apellido</strong></td>
                        <td class="titulotabla"><strong>Institución</strong></td>
                        <td class="titulotabla"><strong>Asesor</strong></td>
                        <td class="titulotabla"><strong>Correo</strong></td>
                        <td class="titulotabla"><strong>Casa</strong></td>
                        <td class="titulotabla"><strong>Móvil</strong></td>

  </tr>
  
<?PHP
		
$sql="SELECT r.idparticipante,r.carpeta,r.idjurado,r.nombre,r.primer,r.segundo,r.asesor,r.nacimiento,r.edad,r.curp,r.movil,r.casa,CAST(r.fechahoracreacion AS DATE) AS 'fechainscripcion',r.email,r.institucion_idinstitucion,r.temas_idtemas,r.titulo,r.status,t.idtemas,t.temas,i.idinstitucion,i.nombre AS 'institucion' FROM registro r INNER JOIN temas t
  ON r.temas_idtemas=t.idtemas INNER JOIN institucion i ON r.institucion_idinstitucion=i.idinstitucion WHERE r.status='PARTICIPANTE_ACTIVO' GROUP BY idparticipante ORDER BY nombre DESC";

                        $result = $mysqli->query($sql);
while($row = $result->fetch_assoc()) {    

  $idparticipante=$row['idparticipante'] ;
  $nombre=$row['nombre'] ;
  $primer=$row['primer'] ;
  $segundo=$row['segundo'] ;
  $asesor=$row['asesor'] ;
  $institucion=$row['institucion'] ;
  $correo=$row['email'] ;
  $casa=$row['casa'] ;
  $movil=$row['movil'] ;
      

?>  
 <tr>
  <td><?php echo $idparticipante; ?></td>
  <td><?php echo $nombre; ?></td>
  <td><?php echo $primer; ?></td>
  <td><?php echo $segundo; ?></td>
  <td><?php echo $asesor; ?></td>
  <td><?php echo $institucion; ?></td>
  <td><?php echo $email; ?></td>
  <td><?php echo $casa; ?></td>
  <td><?php echo $movil; ?></td>
                 
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>