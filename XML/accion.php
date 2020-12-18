<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php

$conexion= new mysqli("localhost", "root", "usbw", "test");
$query = $conexion->query("SELECT * FROM mis_productos WHERE Genero LIKE 'Accion'");		
$xml = new XMLWriter();
$xml->openMemory();
$xml->setIndent(true);
$xml->setIndentString('	'); 
$xml->startDocument('1.0', 'UTF-8');
 
$xml->startElement("Tienda"); //elemento TIENDA

         $xml->startElement("Accion"); //elemento responsable
		   
		 
		 while($row = $query->fetch_assoc()){
            $xml->startElement("Producto"); //elemento Producto;
			$xml->writeElement("Id",$row["id"]);
			$xml->writeElement("Titulo", $row["name"]);
			$xml->writeElement("Descripcion", $row["description"]);
			$xml->writeElement("Genero", $row["Genero"]);
			$xml->writeElement("Año", $row["Ano"]);
			$xml->writeElement("Plataforma", $row["Plataforma"]);
			$xml->writeElement("PEGI", $row["PEGI"]);
			$xml->writeElement("Desarrollador", $row["Desarrollador"]);
			$xml->writeElement("Precio", $row["price"]);
            $xml->endElement(); //fin Producto
		 }
         $xml->endElement(); //fin clase
 

$xml->endElement(); //fin colegio
	
$content = $xml->outputMemory();
ob_end_clean();
ob_start();
header('Content-Type: application/xml; charset=UTF-8');
header('Content-Encoding: UTF-8');
header("Content-Disposition: attachment;filename=Accion.xml");
header('Expires: 0');
header('Pragma: cache');
header('Cache-Control: private');
echo $content;
?>
