<?php
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
    $query = $conexion->query("SELECT * FROM mis_productos WHERE id = {$_GET['id']}");
    
    if($query->num_rows > 0){
        $contenido = $query->fetch_assoc();
        ?>
         <img src='ver.php?id=<?php echo $contenido['id'] ?>' alt='Img blob desde MySQL' width="400" />
         
         
         
         <?php
    }
}
?>