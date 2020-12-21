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
		
$id=$_GET['id'];
echo $id;
if(!empty($_GET['id'])){
    //DB detalles de conexion
    $Host = 'localhost';
    $Username = 'root';
    $Password = 'usbw';
    $bdName = 'test';
    
    //Crear conexion y seleccioanr la base de datos
    $conexion = new mysqli($Host, $Username, $Password, $bdName);
    
    if ($conexion->connect_error) {
        die("No hay conexion con la database: " . $db->connect_error);
    }
    
    //Traer contenido de la base de datos
	$conexion->set_charset("utf8");
    $query = $conexion->query("SELECT * FROM mis_productos WHERE id='".$id."'");
    
    if($query->num_rows > 0){
        $contenido = $query->fetch_assoc();
        ?>
         <img src='ver.php?id=<?php echo $_GET['id'] ?>' alt='Img blob desde MySQL' width="400" />
         
         
         
         <?php
        
    }
}
?>