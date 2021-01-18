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
  <title>Nuevo videojuego</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/Header-Nightsky.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

</head>

<body>

  <div class="header-nightsky">

  
    <nav class="navbar ">
      <div class="container">
       
      </div>
    </nav>
    <div class="hero">
      <h1>Crear Producto</h1>

      <br><br>

      <div id="contenido">
        <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">


          <br>
          <form action="a_nuevo_prod2.php" method="post" style="border-collapse: separate; border-spacing: 10px 5px;" class="p-4" enctype="multipart/form-data">

          
            

            <div class="row">
    <div class="col">
    <h3>Titulo</h3> <input type="text" required class="form-control" name="name" placeholder="Introducir Titulo" />
    </div>
    <div class="col">
    <div class="form-group">
              <h3>Descripcion</h3>
              <textarea class="form-control" required name="description" id="description" rows="3"></textarea>
            </div>
    </div>
  </div>
  
            <div class="row">
              <div class="col">
                <h3>Genero</h3>
                <select class="form-control" required name="Genero">
                  <option>Terror</option>
                  <option>Accion</option>
                  <option>Aventura</option>
                  <option>Puzzle</option>
                  <option>Estrategia</option>
                </select>
              </div>
              <div class="col">
                <h3>Año</h3> <input type="number" required class="form-control" name="Ano" placeholder="Introducir Año"><br>
              </div>
              <div class="col">
                <h3>Plataforma</h3>
                <select class="form-control" required name="Plataforma">
                  <option>PC</option>
                  <option>XBOX ONE</option>
                  <option>XBOX SERIES X</option>
                  <option>PLAY 4</option>
                  <option>PLAY 5</option>
                  <option>NINTENDO SWITCH</option>
                </select>
              </div>
              <div class="col">
                <h3>PEGI</h3>
                <select class="form-control" required name="PEGI">
                  <option>3</option>
                  <option>7</option>
                  <option>12</option>
                  <option>16</option>
                  <option>18</option>
                </select>
              </div>
            </div>

            <div class="row">
              <div class="col"> <h3>Desarrollador</h3> <input type="text" required class="form-control" name="Desarrollador" placeholder="Introducir Desarrollador" /><br></div>
              <div class="col"><h3>Precio</h3> <input type="number" required class="form-control" name="precio" placeholder="Introducir precio" /><br></div>
              <div class="col"><h3>Imagen</h3> <input type="file" required  id="image" name="image" multiple></div>
            </div>


           
            
            
            <br>
          
            <input class='btn btn-primary' type="submit" value="Guardar" />
       
          </form>
          <a href="a_index.php"> <button class="btn btn-primary">Atras</button></a>
        </div>
      </div>
    </div>
</body>

</html>