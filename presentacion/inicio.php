<?php include 'presentacion/encabezado.php'; ?>
<div class="container">
	<div class="row mt-3">
		<div class="col-xs-12 col-lg-4 text-center"></div>
		<div class="col-xs-12 col-lg-4 text-center">
			<div class="card">
				<h5 class="card-header bg-primary text-white">Iniciar Sesión</h5>
				<div class="card-body">
					<form method="post" action="index.php?pid=<?php echo base64_encode("presentacion/autenticar.php")?>" >
						<div class="mb-3">							
							<input type="email" class="form-control" name="correo" placeholder="Correo">							
						</div>
						<div class="mb-3">							
							<input type="password" class="form-control" name="clave" placeholder="Clave">
						</div>
						<button type="submit" class="btn btn-primary">Ingresar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

