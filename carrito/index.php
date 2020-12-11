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
<html lang="es">
<head>
    <title>Catalogo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container{padding: 20px;}
    .cart-link{width: 100%;text-align: right;display: block;font-size: 22px;}
    </style>
</head>
</head>
<body>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading"> 

<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="index.php">Inicio</a></li>
  <li role="presentation"><a href="VerCarta.php">Ver Carta</a></li>
  <li role="presentation"><a href="Pagos.php">Pagos</a></li>
</ul>
</div>

<div class="panel-body container">
    <h1>Mis Productos</h1>
    <a href="VerCarta.php" class="cart-link" title="Ver Carta"><i class="glyphicon glyphicon-shopping-cart"></i></a>
    <div id="products" class="row list-group">
    <div class="form-group container-fluid">
    <label for="exampleFormControlSelect1">Filtrar por:</label>
    
    <form  method="get">
   
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
    <input type="submit" class="btn btn-success"></input>
    </form>
    
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
    Filtrado por:<b> <?php echo $filtrar; ?></b>
  </div>
        <?php
        //get rows query
       
      
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="item col-lg-4">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>
                    <p class="list-group-item-text"><br><?php echo $row["description"]; ?></p>
                    <br>
                    <p class="list-group-item-text">Genero: <?php echo $row["Genero"]; ?></p>
                    <br>
                    <p class="list-group-item-text">Año: <?php echo $row["Ano"]; ?></p>
                    <br>
                    <p class="list-group-item-text">Plataforma: <?php echo $row["Plataforma"]; ?></p>
                    <br>
                    <p class="list-group-item-text">PEGI: <?php echo $row["PEGI"]; ?></p>
                    <br>
                    <p class="list-group-item-text">Desarrollador: <?php echo $row["Desarrollador"]; ?></p>
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
 <div class="panel-footer">Play+</div>
 </div><!--Panek cierra-->
 
</div>
</body>
</html>
