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
     
// include database configuration file
include 'Configuracion.php';

// initializ shopping cart class
include 'La-carta.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
   
    ?>
    <script type="text/javascript">
	alert("No tienes ningun articulo en el carrito!");
	window.location.href='VerCarta.php';
</script>
<?php





}
$nick=$_SESSION["nick_logueado"];
// get customer details by session customer ID
$query = $db->query("SELECT * FROM clientes WHERE name = '$nick'");
$custRow = $query->fetch_assoc();

$_SESSION['sessCustomerID']=$custRow['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pagos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container{padding: 20px;}
    .table{width: 65%;float: left;}
    .shipAddr{width: 30%;float: left;margin-left: 30px;}
    .footBtn{width: 95%;float: left;}
    .orderBtn {float: right;}
    </style>
</head>
<body>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading"> 

<ul class="nav nav-pills">
  <li role="presentation"><a href="index/index.php">Inicio</a></li>
  <li role="presentation"><a href="VerCarta.php">Ver Carta</a></li>
  <li role="presentation" class="active"><a href="Pagos.php">Pagos</a></li>
</ul>
</div>

<div class="panel-body">
    <h1>Vista previa de la Orden</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Sub total</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '$'.$item["price"].' USD'; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo '$'.$item["subtotal"].' USD'; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No hay articulos en tu carrito......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' USD'; ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    <div class="shipAddr">
        <h4>Detalles de envío</h4>
        <p>Nombre del cliente:<b> <?php echo $custRow['name']; ?></b></p>
        <p>Email del cliente:<b> <?php echo $custRow['email']; ?></b></p>
        <p>Telefono del cliente:<b> <?php echo $custRow['phone']; ?></b></p>
        <p>Direccion del cliente:<b> <?php echo $custRow['address']; ?></b></p>
    </div>
    <div class="footBtn">
        <a href="index/index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continuar Comprando</a>
        <a href="AccionCarta.php?action=placeOrder" class="btn btn-success orderBtn">Realizar pedido <i class="glyphicon glyphicon-menu-right"></i></a>
    </div>
        </div>
 <div class="panel-footer">BaulPHP</div>
 </div><!--Panek cierra-->
</div>
</body>
</html>