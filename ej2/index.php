<?php
  // Inicio de sesion
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Portada</title>
</head>

<body>

 <div id="contenedor">
 <?php
    //Sustituimos header y sidebarIzq por cod PHP
    require ('cabecera.php');
    require ('sidebarIzq.php');
?>

	<main>
	  <article>
			<h1>Página principal</h1>
			<p> Aquí está el contenido público, visible para todos los usuarios. </p>
		</article>
	</main>
	
<?php
   //Sustituimos sidebarDer y footer por cod PHP
   require ('sidebarDer.php');
   require ('pie.php');
?>

</div> <!-- Fin del contenedor -->

</body>
</html>