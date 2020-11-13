<?php
session_start();
$nick=$_SESSION["nick_logueado"];
echo $nick;
include 'Configuracion.php';




?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>PHP Shopping Cart Tutorial</title>
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

<div class="panel-body">
    <h1>Mis Productos</h1>
    <a href="VerCarta.php" class="cart-link" title="Ver Carta"><i class="glyphicon glyphicon-shopping-cart"></i></a>
    <div id="products" class="row list-group">
        <?php
        //get rows query
        $query = $db->query("SELECT * FROM mis_productos ORDER BY id DESC LIMIT 10");
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
        <p>No hay productos disponibles</p>
        <?php } ?>
    </div>
        </div>
 <div class="panel-footer">Play+</div>
 </div><!--Panek cierra-->
 
</div>
</body>
</html>