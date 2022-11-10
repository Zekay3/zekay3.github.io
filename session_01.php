<?php include("session.php");?>
<?php include("configuracion.php");?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo $contenido['portal']['title']; ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

<body class="body-wrapper">
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
            <?php include("componentes/nav_admin.php");?>
			</div>
		</div>
	</div>
</section>

<div class="widget change-email mb-0">
<h4 class="widget-header user">Ingresar datos de Presentacion</h4>
<form action="session_01_accion.php" method="post">
<!-- Current Password -->
<div class="form-group" >
<label for="current-email">Titulo</label>
<input type="text" class="form-control" id="texto1" name="texto1" value="<?php echo $contenido["principal_area1"]["texto1"];?>">
</div>
<!-- New email -->
<div class="form-group">
<label for="new-email">Texto</label>
<input type="text" class="form-control" id="texto2" name="texto2" value="<?php echo $contenido["principal_area1"]["texto2"];?>">
</div>
<div class="form-group">
<label for="new-email">Texto</label>
<input type="text" class="form-control" id="texto3" name="texto3" value="<?php echo $contenido["principal_area1"]["texto3"];?>">
</div>
<!-- Submit Button -->
<button type="submit" value="submit" class="btn btn-primary">
				Guardar
			</button>
</form>
</div>
</div>
</div>
</div>
</section>
 <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>