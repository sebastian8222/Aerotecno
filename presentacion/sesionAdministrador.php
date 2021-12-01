<?php 
$administrador = new Administrador($_SESSION["id"]);
$administrador -> consultar();
?>
<div class="container">
	<div class="row mt-3">
		<div class="col">
			<div class="card">
				<h5 class="card-header"><?php echo $administrador -> getNombre() . " " . $administrador -> getApellido(); ?></h5>
				<div class="card-body">
					<?php echo "Correo: " . $administrador -> getCorreo(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
