
<?php require_once "./includes/db.php"; ?>
<?php require_once "./includes/cursos-header.php" ;?>
  
  <!-- breadcrumb -->
  <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="w3breadcrumb-gids">
          <div class="w3breadcrumb-left text-left">
            <h2 class="title AboutPageBanner">
              Courses </h2>
            <p class="inner-page-para mt-2">
              Learn Anytime, Anywhere.
              Accelerate Your Future.</p>
          </div>
          <div class="w3breadcrumb-right">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Courses</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//breadcrumb-->
      <!--/-->
      <section class="w3l-homeblock1" id="about">
        <div class="midd-w3 py-5">
            <div class="container py-lg-5 py-md-3">
                <div class="row cwp23-grids align-items-center">
                    <div class="col-lg-6">
                        <h5 class="title-subw3hny">Find Courses</h5>
                        <h3 class="title-w3l">Find courses on almost any <span class="inn-text">Topic</span></h3>
                        <h6 class="mt-md-4 mt-md-5 mt-4">Build your library for your career
                            <br>and personal growth</h6>
                        <a href="about.html" class="btn btn-style btn-primary mt-lg-5 mt-4">View Courses</a>
                    </div>
                    <div class="HomeAboutImages col-lg-6 mt-lg-0 mt-5 pl-lg-5">
                        <div class="cwp23-text-cols row">
                            <div class="column col-6 mt-lg-4 pt-lg-1">
                                <div class="column-w3-img position-relative">
                                    <a href="#"><img src="assets/images/ab3.jpg" alt=""
                                            class="radius-image img-fluid"></a>
                                    <div class="edu-info">
                                        <h4 class="edu-heading-title"><a href="#">Personal Development</a></h4>
                                    </div>
                                </div>

                            </div>
                            <div class="column col-6">
                                <div class="column-w3-img position-relative">
                                    <a href="#"><img src="assets/images/banner1.jpg" alt=""
                                            class="radius-image img-fluid"></a>
                                    <div class="edu-info">
                                        <h4 class="edu-heading-title"><a href="#">Entrepreneurship</a></h4>
                                    </div>
                                </div>
                                <div class="column-w3-img position-relative mt-4">
                                    <a href="#"><img src="assets/images/banner2.jpg" alt=""
                                            class="radius-image img-fluid"></a>
                                    <div class="edu-info">
                                        <h4 class="edu-heading-title"><a href="#">Photography</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//-->
 <!--/popular-Courses-->

 <section class="w3l-courses" id="courses">
        <div class="blog py-5">
            <div class="container py-md-5 py-2">
                <h5 class="title-subw3hny text-center">Cursos</h5>
                <h3 class="title-w3l text-center">Cursos <span class="inn-text">Destacados</span></h3>
                <div class="row">

                <?php 
            $sql1 = "SELECT * FROM cursos WHERE estado_curso = :estado";
            $stmt = $pdo->prepare($sql1);
            $stmt->execute([
                ':estado' => 'Publicado'
            ]);
            while($cursos = $stmt->fetch(PDO::FETCH_ASSOC)){
                $curso_titulo = $cursos['curso_titulo'];
                $curso_id = $cursos['curso_id'];
                $contenido_curso = substr($cursos['contenido_curso'], 0, 120);
                $imagen_curso = $cursos['imagen_curso']; 
                $autor_curso = $cursos['autor_curso']; 
                $fecha_creacion = $cursos['fecha_creacion'];
                $cant_vista_curso   = $cursos['cant_vista_curso']; 
                $cant_estudiantes   = $cursos['cant_estudiantes'];?>

                <div class="col-lg-3 col-md-6 item mt-5">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="curso-individual.php?curso_id=<?php echo $curso_id;?>" class="zoom d-block">
                                <img class="card-img-bottom d-block" src="assets/images/<?php echo $imagen_curso?>"
                                    alt="Card image cap">
                            </a>
                            <!--<div class="post-pos">
                                <a href="#popular" class="receipe blue">Beginner</a>
                                <a href="#popular" class="receipe yellow ml-2">New</a>
                            </div> -->
                        </div>
                        <div class="card-body course-details">
                            <div class="price-review d-flex justify-content-between mb-1 align-items-center">
                                <!--<p>$53.00</p>
                                <ul class="rating-star">
                                    <li><span class="fas fa-star"></span></li>
                                    <li><span class="fas fa-star"></span></li>
                                    <li><span class="fas fa-star"></span></li>
                                    <li><span class="fas fa-star"></span></li>
                                    <li><span class="fas fa-star-o"></span></li>
                                </ul>-->
                            </div>
                            <a href="curso-individual.php" class="course-desc"><?php echo $curso_titulo;?></a>
                            <p><?php echo $contenido_curso;?></p>
                            <div class="course-meta mt-4">
                                <div class="meta-item course-lesson">
                                    <span class="fas fa-users"></span>
                                    <span class="meta-value">Estudiantes:<?php echo $cant_estudiantes;?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php }?>
        </div>
        <div class="mt-5 mx-auto text-more text-center pt-lg-4">
            <a href="courses.html" class="btn btn-style btn-primary">Ver todos los cursos</a>
        </div>
    </div>
</section>

        
                    
    <!--//popular-Courses-->
  <!--/footer-->
  

    <?php require_once "./includes/footer.php" ;?>