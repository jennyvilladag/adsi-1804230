<?php 
	include 'config/app.php';
	include 'config/db.php';
?>
	<?php include 'includes/header.php'; ?>
	<div class="col-md-8 offset-md-2">
		<h1 class="text-center text-muted">PHP & MYSQL</h1>
		<hr>		
		<div class="jumbotron text-center">
			<img src="<?php echo $imgs ?>logo.png" width="180px">
			<br><br>
			<div class="btm-group btn-group-vertical">
				<a class="btn btn-dark" href="">
					<i class="fa fa-user"></i>
					Módulo Pokemones
				</a>
				<a class="btn btn-dark" href="">
					<i class="fa fa-users"></i>
					Módulo Entrenadores
				</a>
				<a class="btn btn-dark" href="">
					<i class="fa fa-building"></i>
					Módulo Gimnasios
				</a>

			</div>
		</div>
	</div>	
	<?php include 'includes/footer.php'; ?>

