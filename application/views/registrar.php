<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body>
	<section id="login">
		<h1 id="title" class="text-capitalize text-center">Prueba de Bootstrap con codeigniter</h1>
		<article class="container">	
			<div class="row">
				<div class="col-md-4 offset-4 card">
					<div class="card-title">
						<h2>Registro</h2>
					</div>
					<div class="card-info ">
						<form action="">
							<div class="form-group form-row">
								<label class="col-12" for="">correo Electronico</label>
							 	<input class="col-12" type="text" name="email" value="" placeholder="Email">
								
							</div>
							<div class="form-group form-row">
								<label class="col-12" for="">contraseña</label>
								<input class="col-12" type="password" name="pass" value="" placeholder="Password">
								
							</div>
							<div class="form-group form-row  ">
								<div class="col-md-6 col-xs-12">
									<input type="submit" class="btn btn-success btn-block" value="enviar">
								</div>
								<div class="col-md-6 col-xs-12">
									<input type="reset" class="btn btn-danger btn-block " value="Borrar">
								</div>
								
							</div>
						</form>
					</div>
					<div class="card-footer">
						<a href="<?php echo base_url('lib/css/bootstrap.css') ?>">registrar</a>
					</div>
				</div>
				
			</div>
		</article>
	</section>