<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php

session_start();
		
		if(!isset($_SESSION["nick_logueado"])){
			?>
			<script type="text/javascript">
			alert("No estas logueado");
			window.location.href='./login.html';
				</script>
				<?php	
		}
		$nick=$_SESSION["nick_logueado"];
	
	// eliminar();
	generar( );

	// function eliminar(){

	// 	print exec("sh Z:/xml/borrarxml.sh")."\n";
	// 	$contents = file_get_contents('Z:/xml/borrarxml.sh');
	// 	echo shell_exec($contents);
		
	// }
	function generar()
	{
      
		include 'a_conexion.php';
		$sentencia="SELECT *
		FROM mis_productos
		WHERE Genero LIKE 'Aventura'
		INTO OUTFILE 'Z:/excel/aventura.csv'
		FIELDS TERMINATED BY ';'
		OPTIONALLY ENCLOSED BY '\"'
		LINES TERMINATED BY '\r\n'
		";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>


<script type="text/javascript">
  let timerInterval
Swal.fire({
  title: 'Exportando videojuegos de aventura a archivo csv',
  timer: 2000,
  timerProgressBar: true,
  willOpen: () => {
    Swal.showLoading()
    timerInterval = setInterval(() => {
      const content = Swal.getContent()
      if (content) {
        const b = content.querySelector('b')
        if (b) {
          b.textContent = Swal.getTimerLeft()
        }
      }
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
    window.location.href='./menuexcel.php';
  }
})
	
	
</script>