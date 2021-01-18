<?php
	
session_start();
		
		if(!isset($_SESSION["nick_logueado"])){
			?>
			<script type="text/javascript">
			alert("No estas logueado");
			window.location.href='../login.html';
				</script>
				<?php	
		}
        $nick=$_SESSION["nick_logueado"];
        
        if (!($nick=="admin")){
            ?>
			<script type="text/javascript">
			alert("No eres admin");
			window.location.href='../login.html';
				</script>
                <?php	
               
		}
		?>
<!DOCTYPE html>
<html>

<head>
    <title>Gestionar Productos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/Header-Nightsky.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="header-nightsky">
        <nav class="navbar navbar-default">
            <div class="container">
                <a class="navbar-brand" href="#"><img style="width: 50%;" src="../imagenes/gitfuck.png" alt=""></a>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../productos/a_index.php">Gestionar Productos</a></li>
                        <li><a href="../usuarios/u_index.php">Gestionar Usuarios</a></li>
                        <li><a href="../carrito/index/index.php">Mostrar Tienda</a></li>
                        <li><a href="../xml/menuxml.php">XML</a></li>
                        <li><a href="../excel/menuexcel.php">CSV</a></li>
                       
                       
                        
                    
                    </ul>
                </div>
            </div>
        </nav>
        <div class="hero">
            <h1>Gestionar productos </h1>
            <a href="a_nuevo_prod1.php"> <button  type="button" class="btn btn-primary w-auto">Nuevo Producto</button> </a>
            <br><br>
  <div id="contenido">
    <table  style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
       <thead>

      <th>Imagen</th>
      <th>Id.</th>
      <th>Titulo.</th>
      <th>Descripcion</th>
      <th>Genero</th>
      <th>Ano</th>
      <th>Platafotma</th>
      <th>Pegi</th>
      <th>Desarrollador</th>
      <th>Precio</th>
        </thead>

    <?php
      include "a_conexion.php";
      $sentecia="SELECT * FROM mis_productos";
      $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
      while($fila=$resultado->fetch_assoc())
      {
     $id = $fila['id'];
   
        echo "<tr>";?>
 <!-- Desencadenar el modal con un botón -->
 
    <td>
 <button type="button" class="btn btn-warning openBtn<?php echo $id?> ">Mostrar Caratula </button>
    <br><br>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
            <!-- Modal contenido-->
            <div class="modal-content">
                
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
          
        </div>
    </div>
    
     
     </div>

 </div><!--Panel cierra-->
  
</div>
</td>

<script>

$('.openBtn<?php echo $id?>').on('click',function(){
    $('.modal-body').load('CargarContenido.php?id=<?php echo $id ?>',function(){
        $('#myModal').modal({show:true});
    });
});
</script>

 

        <?php
          echo "<td>"; echo $fila['id']; echo "</td>";
          echo "<td>"; echo $fila['name']; echo "</td>";
          echo "<td>"; echo $fila['description']; echo "</td>";
          echo "<td>"; echo $fila['Genero']; echo "</td>";
          echo "<td>"; echo $fila['Ano']; echo "</td>";
          echo "<td>"; echo $fila['Plataforma']; echo "</td>";
          echo "<td>"; echo $fila['PEGI']; echo "</td>";
          echo "<td>"; echo $fila['Desarrollador']; echo "</td>";
          echo "<td>"; echo $fila['price']; echo " EUR";echo "</td>";
          echo "<td><a href='a_modif_prod1.php?id=".$fila['id']."'> <button type='button'  class='btn btn-primary'><class   class='glyphicon glyphicon-pencil'></class></button> </a></td>";
          echo " <td><a href='a_eliminar_prod.php?id=".$fila['id']."'> <button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-trash'></button> </a></td>";
        echo "</tr>";
      }
    ?>

   
        
    </table>

<br><br>
      
    <footer >
  <a href="../menu_admin.php">  <button type='button' class='btn btn-primary'>Atras</button> 
	</footer>
            
        </div>
    </div>
    
    
</body>


</html>
