
<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>

<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php"); ?>
    <title>IT GOCEK</title>
	<link rel="shortcut icon" href="../../imagenes/FAVICON.png">
</head>
<body class="with-side-menu">

    <?php require_once("../MainHeader/header.php"); ?>

	<div class="mobile-menu-left-overlay"></div>

    <?php require_once("../MainNav/nav.php"); ?>
	
	<div class="page-content">
		<div class="container-fluid">
			Blank page.
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<?php require_once("../MainJs/js.php");?>


		<script type="text/javascript" src="consultarticket.js"></script>

</body>
</html>
<?php
		} else {
			header("Location:".Conectar::ruta()."index.php");
			}
	?>
	