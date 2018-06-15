<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body>
	<section id="login">
		<h1 id="title" class="text-capitalize text-center animated bounceInDown" style="animation-delay: 1.3s;">Login con Bootstrap, animate.css<br/> AngularJS  y codeigniter</h1>
		<article class="container">	
			<div class="row">
				<div class="col-md-4 offset-4 ">
					<div class="card container animated fadeIn">
					<div class="card-title">
						<h2>login</h2>
					</div>
					<div class="card-info ">
						<form action="<?php echo base_url('index.php/Welcome/revisar') ?>" id="login" method="post" ng-app="myApp" ng-controller="validateCtrl" 
name="myForm" novalidate >
							<div class="form-group form-row">
								<label class="col-12" for=""> <i class="fa fa-envelope"></i>  Correo electronico</label>
								<input type="email"  class="col-12" name="email" placeholder="Correo electronico" ng-model="email" required>
<span style="color:red" ng-show="myForm.email.$dirty && myForm.email.$invalid">
<span ng-show="myForm.email.$error.required"><i class="fa fa-times"></i> Coloque el correo correctamente.</span>

</span>
								
							</div>
							<div class="form-group form-row">
								<label class="col-12" for=""><i class="fa fa-pencil"></i> Contraseña</label>
								<input class="col-12" type="password" name="pass" value="" placeholder="Password" ng-model="pass" required>
								<span style="color:red" ng-show="myForm.pass.$dirty && myForm.pass.$invalid">
<span ng-show="myForm.pass.$error.required"><i class="fa fa-times"></i> Coloque la clave.</span>
</span>
								
							</div>
							<div class="form-group form-row  ">
								<div class="col-md-6 col-xs-12">
									<button type="submit" class="btn btn-success btn-block" value=" enviar" ng-disabled="myForm.pass.$dirty && myForm.pass.$invalid ||  
myForm.email.$dirty && myForm.email.$invalid || myForm.email.$untouched  || myForm.email.$pristine"><i class="fa fa-check"></i> Enviar</button>
								</div>
								<div class="col-md-6 col-xs-12">
									<button type="reset" class="btn btn-danger btn-block " value="Borrar"><i class="fa fa-times"></i> Borrar</button>
								</div>
								
							</div>
						</form>
					</div>
					<div class="card-footer">
						<?php  echo $correcto; ?>

					</div>
				</div>
				</div>
			</div>

			
		</article>

	</section>


