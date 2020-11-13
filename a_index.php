<?php
session_start();
$nick=$_SESSION["nick_logueado"];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejemplo de interaccion con DB</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="todo">
 
<img  src="./imagenes/1.jpg"class="d-block w-100" alt="..."width="400" height="400">
  
  <div id="contenido">
  	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
        <th>Titulo.</th>
        <th>Descripcion</th>
  			<th>Genero</th>
  			<th>Ano</th>
        <th>Platafotma</th>
        <th>Pegi</th>
        <th>Desarrollador</th>
        <th>Precio</th>
  			<th> <a href="a_nuevo_prod1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>

      <?php
        include "a_conexion.php";
        $sentecia="SELECT * FROM mis_productos";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
        while($fila=$resultado->fetch_assoc())
        {
          echo "<tr>";
            echo "<td>"; echo $fila['name']; echo "</td>";
            echo "<td>"; echo $fila['description']; echo "</td>";
            echo "<td>"; echo $fila['Genero']; echo "</td>";
            echo "<td>"; echo $fila['Ano']; echo "</td>";
            echo "<td>"; echo $fila['Plataforma']; echo "</td>";
            echo "<td>"; echo $fila['PEGI']; echo "</td>";
            echo "<td>"; echo $fila['Desarrollador']; echo "</td>";
            echo "<td>"; echo $fila['price']; echo " EUR";echo "</td>";
            echo "<td><a href='a_modif_prod1.php?id=".$fila['id']."'> <button type='button' class='btn btn-success'><span class='glyphicon glyphicon-pencil'></span>Modificar</button> </a></td>";
            echo " <td><a href='a_eliminar_prod.php?id=".$fila['id']."'> <button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash'>Eliminar</button> </a></td>";
          echo "</tr>";
        }
      ?>

     
  		
  	</table>
  </div>
  
	<footer >
  <a href="menu_admin.php">  <button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash'>Atras</button> 
	</footer>

</div>


</body>
</html>