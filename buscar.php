<?php require_once "./includes/db.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EducaBlog | Inicio </title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
   
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark stroke">
                <h1>
                    <a class="navbar-brand" href="index.php">
                        <i class="fas fa-chalkboard-teacher"></i> </a>
                </h1>
                <!-- if logo is image enable this   
          <a class="navbar-brand" href="#index.html">
              <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
          </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="inicio.php">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nosotros.php">Nosotros</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="categorias.php">categorías</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Nuestro Liceo <span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="direccion.php">Dirección</a>
                                <a class="dropdown-item" href="convivenciaescolar.php">Convivencia Escolar</a>
                                <a class="dropdown-item" href="administracion.php">Administración</a>
                                <a class="dropdown-item" href="orientacion.php">Orietación</a>
                                <a class="dropdown-item" href="pie.php">PIE</a>
                                <a class="dropdown-item" href="inspectoria.php">Inspectoría</a>
                                <a class="dropdown-item" href="misionvision.php">Misión-Visión</a>
                            </div>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cursos.php">Cursos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Blog <span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="nuestroblog.php">NuestroBlog</a>
                                <a class="dropdown-item" href="blogindividual.php">Blog individual</a>
                                <a class="dropdown-item" href="cuentapublica.php">Cuenta Pública</a>
                                <a class="dropdown-item" href="convenios.php"> Convenios</a>
                                <a class="dropdown-item" href="correo.php"> Correo</a>
                                <a class="dropdown-item" href="centroestudiantes.php">Centro estudiantes</a>
                                <a class="dropdown-item" href="404.php"> 404</a>
                            </div>
                        </li>
                        <li class="nav-item mr-lg-1">
                            <a class="nav-link" href="contacto.php">Contacto</a>
                        </li>
                        <!--/search-right-->
                        <li class="header-search mr-lg-2 mt-lg-0 mt-4 position-relative">
                            <div class="search-right">
                                <a href="buscar.php" class="btn btn-style search-btn" title="search"><span
                                        class="fas fa-search mr-2" aria-hidden="true"></span> Buscar</a>

                     <?php
                        if(isset($_POST['search-keyword'])) {
                            $keyword = $_POST['search-keyword'];
                            $sql = "SELECT * FROM articulos WHERE estado_articulo = :estado AND titulo_articulo LIKE :titulo";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([
                                ':estado' => 'Publicado',
                               ':titulo' => '%'. trim($keyword) .'%'
                            ]);
                            $post_found = 0;
                            $count = $stmt->rowCount();
                            if($count == 0) {
                                $post_found = 0;
                            } else {
                                $post_found = $count;
                            }
                        }
                    ?>
                                     
                                <!-- search popup -->
                                <div id="search-keyword" class="pop-overlay">
                                    <div class="popup">

                                        <form action="buscar.php" method="post" class="search-box">
                                            <input type="#search" placeholder="Enter Keyword" name="search-keyword"
                                                required="required" autofocus="">
                                            <button type="submit" class="btn"><span class="fas fa-search"
                                                    aria-hidden="true"></span></button>
                                        </form>

                                    </div>
                                    <a class="close" href="#close">×</a>
                                </div>
                                <!-- /search popup -->
                            </div>
                        </li>
                        <!--//search-right-->
                    </ul>
                </div>


                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container py-1">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>

        </div>
    </header>


     <!--/Searh re sult here-->
      <!--/w3l-blog-->
    <section class="w3l-blog" >
        <div class="blog py-5" id="Newsblog">
            <div class="container py-lg-5 py-md-4 py-2">
                <h5 class="title-subw3hny text-center mb-1">Nuestro Artículo</h5>
                <h3 class="title-w3l text-center mb-sm-5 mb-4">Mantente Actualizado Con Nuestro<br>
                    <span
                    class="inn-text">Canal De Noticias.</span></h3>
                <div class="row" >
    
     <?php 
                                    $sql = "SELECT * FROM articulos WHERE estado_articulo = :estado AND titulo_articulo LIKE :titulo ORDER BY articulo_id DESC LIMIT 0, 6";
                                    $stmt = $pdo->prepare($sql);
                                    $stmt->execute([
                                        ':estado' => 'Publicado',
                                        ':titulo' => '%'. trim($keyword) .'%'
                                    ]);
                                    $count = $stmt->rowCount();
                                    if($count == 0) {
                                        echo "No posts found! Try again";
                                    } else {
                                        while($articulos = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $articulo_id = $articulos['articulo_id'];
                                            $titulo_articulo = $articulos['titulo_articulo'];
                                            $detalle_articulo = substr($articulos['detalle_articulo'], 0, 140); 
                                            $imagen_articulo = $articulos['imagen_articulo'];
                                            $fecha_articulo = $articulos['fecha_articulo'];
                                            $autor_articulo = $articulos['autor_articulo'];
                                            $cant_vista = $articulos['cant_vista']; ?>                    
        
        <!-- your HTML code here -->
		
		<div class="col-lg-4 col-md-6 item  ">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="blogindividual.php?articulo_id=<?php echo $articulo_id;?>" class="zoom d-block">
                                    <img class="card-img-bottom d-block" src="assets/images/<?php echo $imagen_articulo;?>"
                                        alt="Card image cap">
                                </a>
                            </div>
                            <div   class="card-body blog-details">
             
                                <a href="blogindividual.php" class="blog-desc"><?php echo $titulo_articulo ;?> 
                                <p><?php echo $detalle_articulo ;?></p></a>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between ">
                                <div class="author align-items-center">
                                    <a href="blogindividual.php" class="post-author">
                                        <img src="assets/images/<?php echo $imagen_articulo;?>" alt="" class="img-fluid rounded-circle">
                                    </a>
                                    <ul class="blog-meta">
                                        <li>
                                            <span class="meta-value">por</span><a href="blogindividual.php"> <?php echo $autor_articulo;?></a>
                                        </li>
                                    </ul>
                                    <div class="date">
                                    <p><?php echo date("d M, Y", strtotime($fecha_articulo));?></p>
                                    </div>  
                                </div>
                                <div class="post-preview-meta  ">
                                    <?php echo $cant_vista;?>

                                 </div>
                                
                            </div>
                        </div>
                    </div>
        
    <?php }
}
?>

</section>
			
    <!--/header-->


     <!--/Footer-->

     <?php require_once "./includes/footer.php" ;?>