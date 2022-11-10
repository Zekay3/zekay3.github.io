<?php
// Start the session
session_start();
?>
<?php include("configuracion.php");?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Negocio el viejo Almacen</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>


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
					<h3 class="widget-header user">Sistema Gestion de Contenidos</h3>
                    <?php
               // var_dump($_POST);
                echo "usuario:".$contenido["login"]["usuario"];
                echo "<br>clave:".$contenido["login"]["clave"];

                if (isset($_POST["usuario"])){
                    if ( ($_POST["usuario"]===$contenido["login"]["usuario"]) && ($_POST["clave"]===$contenido["login"]["clave"])){
                        echo "<h1> Usuario valido de sistema</h1>";
                        $_SESSION["usuario"] = $contenido["login"]["usuario"];
                    }else{
                        echo "<h1> Usuario no valido para el sistema</h1>";
                    }
                }else{
                    echo "No esta en el sistema en este momento";
                }
                ?>
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