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
        $Preciof=1;
        $idf=0;
        $filtrar="";
        $Where="";
        $generos="";
include 'Configuracion.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Header</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/Header-Nightsky.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
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
                        <li><a href="index.php">Productos</a></li>
                        <li><a href="VerCarta.php">Ver carrito</a></li>
                        <li><a href="Pagos.php">Pagos</a></li>
                       

                    </ul>
                </div>
            </div>
        </nav>
        <div class="hero">
          
  <div id="contenido">    

  <div class="container">


<h1>Productos</h1>
   <div class="container">
    <div id="products" class="row list-group">
    <div class="form-group container-fluid">
    <table>
  <thead>
    <tr>
      <th scope="col">Filtrar por:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><form  method="get">
   
   <select class="form-control " style="width: auto;"  name='seleccion'>
       <option selected disabled >Selecciona una</option>
       <option value='0'>Id</option>
       <option value='1'>Precio</option>
       <option value='2'>Videojuegos de Terror</option>
       <option value='3'>Videojuegos de Accion</option>
       <option value='4'>Videojuegos de Aventura</option>
       <option value='5'>Videojuegos de Puzzles</option>
       <option value='6'>Videojuegos de Estrategia</option>
       </select>
       <br>
   <input type="submit" value="Filtrar" class="btn btn-success"></input>
   </form></th>
     
  </tbody>
</table>

    
    
    
    <br>
    <?php 
     
        $ordenar=$_GET['seleccion'];


    if ($ordenar==0){
        $filtrar="id";
        $query = $db->query("SELECT * FROM mis_productos ORDER BY $filtrar DESC LIMIT 10 ");
    } 
    else if ($ordenar==1){
        $filtrar="price";
        $query = $db->query("SELECT * FROM mis_productos ORDER BY $filtrar DESC LIMIT 10 ");
    } 
    else if ($ordenar==2){
        $filtrar="terror";
        $query = $db->query("SELECT * FROM mis_productos WHERE Genero LIKE 'Terror' ");

    } 
    else if ($ordenar==3){
        $filtrar="Accion";
        $query = $db->query("SELECT * FROM mis_productos WHERE Genero LIKE 'Accion' ");
    } 
    else if ($ordenar==4){
        $filtrar="Accion";
        $query = $db->query("SELECT * FROM mis_productos WHERE Genero LIKE 'Aventura' ");
    } 
    else if ($ordenar==5){
        $filtrar= "Puzzles";
        $query = $db->query("SELECT * FROM mis_productos WHERE Genero LIKE 'Puzzles' ");
    } 
    else if ($ordenar==6){
        $filtrar="Estrategia";
        $query = $db->query("SELECT * FROM mis_productos WHERE Genero LIKE 'Estrategia' ");
    } 
   
    
    
    ?>
    <h4>Filtrado por:<b> <?php echo $filtrar; ?></b></h4> 
  </div>
  </div>
        <?php
        //get rows query
       
      
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="container">
        <div class="item col-lg-4">
            <div >
                <div class="caption">
                    <h2 class="list-group-item-heading">Titulo: <?php echo $row["name"]; ?></h2>
                    <h3 class="list-group-item-text">Descripcion:<br><?php echo $row["description"]; ?></h3>
                    <br>
                    <h3 class="list-group-item-text">Genero: <?php echo $row["Genero"]; ?></h3>
                    <br>
                    <h3 class="list-group-item-text">Año: <?php echo $row["Ano"]; ?></h3>
                    <br>
                    <h3 class="list-group-item-text">Plataforma: <?php echo $row["Plataforma"]; ?></h3>
                    <br>
                    <h3 class="list-group-item-text">PEGI: <?php echo $row["PEGI"]; ?></h3>
                    <br>
                    <h3 class="list-group-item-text">Desarrollador: <?php echo $row["Desarrollador"]; ?></h3>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo '€'.$row["price"].' EUR'; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="AccionCarta.php?action=addToCart&id=<?php echo $row["id"]; ?>">Agregar a la Carta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } }else{ ?>
        <p class="container">No hay productos disponibles</p>
        <?php } ?>
    </div>
        </div>
       </div>

        <?php
       
		if($nick=="admin"){?>
      <a href="../menu_admin.php">  <button type='button' class='btn btn-primary'>Volver al menu principal</button> </>
		<?php
		}
		else{?>

  <a href="../menu_usuario.php">  <button type='button' class='btn btn-primary'>Volver al menu principal</button> </div>
		<?php
	}?>












 
 </div><!--Panek cierra-->

</div>
</body>
</html>
