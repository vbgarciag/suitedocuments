<html>
<head>

	<meta charset= "utf-8">
	<meta name="viewreport" content="width=device-width, initial-scale=1">
	<title>Bootstrap</title>


	<link rel="stylesheet" media="screen" href="assets/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">


</head>
<body>
	<nav class="navbar navbar-inverse" role="navigation">

		<div class="collapse navbar-collapse navbar-ex1-collapse">

			<form class="navbar-form navbar-right" role="search">
				<div class="btn">
					<a href="#ventana1" class="btn btn-success" data-toggle="modal">LogIn</a>
					<a href="#ventana2" class="btn btn-warning" data-toggle="modal">Create Account</a>
				</div>
			</form>

			<!--Formulario Iniciar Sesion-->

			<div class="modal fade" id="ventana1">
				<div class="modal-dialog">
					<form class="form-horizontal">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<center><img style="max-width:100px; -7px" src="assets/images/logo.png"></a>	<h3 class="modal-title">Sign Up, It's free and always will be</h3></center>
								<div class="modal-body">

									<div class="form">
									
										<div class="form-group">
											<label for="contact-email" class="col-lg-3 control-label">E-mail Adress</label>
											<div class="col-lg-7">
												<input type="text" class="form-control" id="contact-email" placeholder="suitedocument@hotmail.com">
											</div>
										</div>

										<div class="form-group">
											<label for="contact-password" class="col-lg-3 control-label">Password</label>
											<div class="col-lg-7">
												<input type="text" class="form-control" id="contact-password" placeholder="**********">
												<div class="modal-footer">
													<button type="button" class="btn btn-info btn-lg" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-info btn-lg">LogIn</button>
												</div>
											</div>
										</div>
									</div>
								
									<a href="#"><div class="h4"><h4>Forgot Account?</h4></div></a>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>


				<!--Formulario Crear Cuenta-->

			<div class="modal fade" id="ventana2">
				<div class="modal-dialog">
					<form class="form-horizontal">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<center><img style="max-width:100px; -7px" src="assets/images/logo.png"></a>	<h3 class="modal-title">Sign Up, It's free and always will be</h3></center>
								<div class="modal-body">

									<div class="form">
										<div class="form-group">
											<label for="contact-name" class="col-lg-3 control-label">Full-Name</label>
											<div class="col-lg-7">
												<input type="text" class="form-control" id="contact-name" placeholder="Please insert your name">
											</div>
										</div>

										<div class="form-group">
											<label for="contact-email" class="col-lg-3 control-label">E-mail Adress</label>
											<div class="col-lg-7">
												<input type="text" class="form-control" id="contact-email" placeholder="suitedocument@hotmail.com">
											</div>

										</div>

										<div class="form-group">
											<label for="contact-account" class="col-lg-3 control-label">Account Type</label>
											<div class="col-lg-7">
												<input type="text" class="form-control" id="contact-account" placeholder="Account Type">
											</div>
										</div>

										<div class="form-group">
											<label for="contact-password" class="col-lg-3 control-label">Password</label>
											<div class="col-lg-7">
												<input type="text" class="form-control" id="contact-password" placeholder="**********">
											</div>
										</div>

										<div class="form-group">
											<label for="contact-cpassword" class="col-lg-3 control-label">Confirm Password</label>
											<div class="col-lg-7">
												<input type="text" class="form-control" id="contact-cpassword" placeholder="**********">
											</div>
										</div>
										<div class=modal-footer>
											<button type="button" class="btn btn-info btn-lg" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-info btn-lg">Sign Up!</button>
										</div>
									</div>
								</div>
							</div>
							</form>
						</div>
					</div>

				</div>
				<a class="navbar-form navbar-left" rel="home" href="index.php" ><img style="max-width:100px; -7px" src="assets/images/logo.png"></a>	
			</div>
		</nav>

		<div class="bs-example">
			<div class="img">
				<img src="assets/images/nube.jpg" class="img-rounded" data-toggle="popover" data-content="We are your best option!">
			</div>
			<div class="h2"><h2>Suite Documents, Join Now!</h2></div>
			

		</body>
		<script src="assets/bootstrap/js/jquery-3.0.0.min.js"></script>

		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/js/style_index.js"></script>
		</html>	