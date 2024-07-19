<?php session_start(); ?>

<?php require_once "./includes/heeader.php" ;?>
<?php require_once "./includes/db.php" ;?>
<link rel="stylesheet" href="./assets/categorias/css/styles.css">
    <!--/Banner-Start-->
    <section class="bannerw3l-hnyv">
        <div class="banner-layer">
            
            <video autoplay muted loop id="myVideo">
                <source src="assets/images/line-edu.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
            <div class="main-content-top">
                <div class="container">
                    <div class="main-content">
                        <!-- if logo is image enable this   
                        <a class="logo" href="index.html">
                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                        </a> -->
                        <h4>Educación A Distancia Con Aprendizaje Divertido</h4>
                        <h3>Descubre Las Mejores Clases  <span class="inn-text">Para El Mejor Aprendizaje</span> </h3>
                        <a href="about.html" class="btn btn-style transparant-btn mt-md-5 mt-4">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w3apply-admission">
            <div class="apply-admission-wrap">
                <div class="apply-admission-inner">
                    <h4 class="title text-center">
                        <span>Solicita Tu Admisión</span>
                    </h4>
                    <div class="caption text-center mb-2">
                    ¡Hazlo más simple!
                    </div>
                    <div class="apply-form">
                        <form action="#" class="" method="post">
                            <input type="text" name="text" placeholder="Tu Nombre" required="">
                            <input type="email" name="email" placeholder="Tu Correo" required="">
                            <button class="btn btn-style btn-primary">Aplicar Ahora</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>



<!-- For Categories -->
<h1 class="pt-5 row justify-content-center">Nuestras Categorias:</h1>
                            <hr />
                            <div class="row features text-center mb-5">
                            <?php 
                         $sql1  = "SELECT * FROM categorias WHERE categoria_estado = :estado";
                         $stmt  = $pdo->prepare($sql1);
                         $stmt->execute([
                       ':estado' => 'Publicado'
                        ]);

                    while($categorias = $stmt->fetch(PDO::FETCH_ASSOC)){
                    $categoria_id = $categorias['categoria_id'];
                    $categoria_nombre = $categorias['categoria_nombre'];
                    $categoria_cant_articulo = $categorias['categoria_cant_articulo'];
                    ?>
                    

                <div class="col-lg-4 col-md-6 mb-5">
              <a class="card card-link border-top border-top-lg border-primary h-100 lift" href="categorias.php?categoria_id=<?php echo $categoria_id;?>&categoria_nombre=<?php echo $categoria_nombre;?>">
                <div class="card-body p-5">
               <div class="icon-stack icon-stack-lg bg-primary-soft text-primary mb-4"><i data-feather="user"></i></div>
            <h6><?php echo $categoria_nombre;?></h6>
              </div>
            <div class="card-footer bg-transparent pt-0 pb-5">
            <div class="badge badge-pill badge-light font-weight-normal px-3 py-2"><?php echo $categoria_cant_articulo;?>articulos</div>
        </div>
    </a>
</div>
                            
                



<?php }?>

</div>


             
                        <!--End of categories-->    
<!--//Banner-End-->
    <!-- /bottom-grids
    <section class="w3l-bottom-grids-6 py-5" id="grids">
        <div class="container py-md-5 py-2">
            <div class="grids-area-hny row text-left pt-lg-5 mt-lg-5">
                <div class="col-lg-4 col-md-6 grids-feature pr-lg-5">
                    <div class="area-box">
                        <span class="fas fa-users"></span>
                        <h4><a href="#feature" class="title-head">Los mejores y más comprometidos profesores</a></h4>
                        <p>Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed dolor
                            et
                            amet labore et dolore elit.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-5">
                    <div class="area-box">
                        <span class="fas fa-laptop-code"></span>
                        <h4><a href="#feature" class="title-head">Clases de alta calidad y categorías de cursos</a>
                        </h4>
                        <p>Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed dolor
                            et
                            amet labore et dolore elit.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-5 pl-lg-5">
                    <div class="area-box">
                        <span class="fas fa-book-open"></span>
                        <h4><a href="#feature" class="title-head">La amplia selección de cursos e instrucción</a></h4>
                        <p>Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed dolor
                            et
                            amet labore et dolore elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //bottom-grids-->
    <!--/about-section 
    
    <section class="w3l-homeblock1" id="about">
        <div class="midd-w3 py-5">
            <div class="container py-lg-5 py-md-3">
                <div class="row cwp23-grids align-items-center">
                    <div class="col-lg-6">
                        <h5 class="title-subw3hny">Acerca De</h5>
                        <h3 class="title-w3l">Encuentra Cursos Sobre Casi Cualquier <span class="inn-text"> Tema Tema</span></h3>
                        <h6 class="mt-md-4 mt-md-5 mt-4">Construye tu biblioteca para tu carrera

                            <br>y crecimiento persona</h6>
                        <a href="about.html" class="btn btn-style btn-primary mt-lg-5 mt-4">Ver cursos</a>
                    </div>
                    <div class="HomeAboutImages col-lg-6 mt-lg-0 mt-5 pl-lg-5">
                        <div class="cwp23-text-cols row">
                            <div class="column col-6">
                                <div class="column-w3-img position-relative">
                                    <a href="#"><img src="assets/images/1.jpg" alt=""
                                            class="radius-image img-fluid"></a>
                                    <div class="edu-info">
                                        <h4 class="edu-heading-title"><a href="#">Desarrollo Personal</a></h4>
                                    </div>
                                </div>
                                <div class="column-w3-img position-relative mt-4">
                                    <a href="#"><img src="assets/images/b8.jpg" alt=""
                                            class="radius-image img-fluid"></a>
                                    <div class="edu-info">
                                        <h4 class="edu-heading-title"><a href="#">Emprendimiento</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="column col-6">
                                <div class="column-w3-img position-relative">
                                    <a href="#"><img src="assets/images/b3.jpg" alt=""
                                            class="radius-image img-fluid"></a>
                                    <div class="edu-info">
                                        <h4 class="edu-heading-title"><a href="#">Negocio</a></h4>
                                    </div>
                                </div>
                                <div class="column-w3-img position-relative mt-4">
                                    <a href="#"><img src="assets/images/2.jpg" alt=""
                                            class="radius-image img-fluid"></a>
                                    <div class="edu-info">
                                        <h4 class="edu-heading-title"><a href="#">Fotografía</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//about-section -->
    <!--/home-stats-->
    <section class="w3l-stats-main" id="stats">
        <div class="container">
            <div class="row stats-con py-lg-0 py-5">
                <div class="col-lg-6 stats-content-right mb-lg-0 mb-lg-5 mb-2">
                    <a href="#service" class="d-block zoom"><img src="assets/images/ab1.jpg" alt=""
                            class="img-fluid" /></a>
                </div>
                <div class="col-lg-6 stats-content-left pl-lg-5">

                    <div class="stats_info counter_grid1 text-left mt-lg-5 mt-4">
                        <div class="icon stat-icon">
                            <p class="counter">5233</p>
                        </div>
                        <div class="stat-icon-des">

                            <h4>
                            Los Mejores y Más Comprometidos Profesores</h4>
                            <p class="para-stat">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                                ultrices in ligula.</p>
                        </div>
                    </div>
                    <div class="stats_info counter_grid text-left mt-lg-5 mt-4">
                        <div class="icon stat-icon">
                            <p class="counter">1233</p>
                        </div>
                        <div class="stat-icon-des">

                            <h4>La Gran Selección de Cursos e Instrucción</h4>
                            <p class="para-stat">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                                ultrices in ligula.</p>
                        </div>
                    </div>
                    <div class="stats_info counter_grid text-left mt-lg-5 mt-4">
                        <div class="icon stat-icon">
                            <p class="counter">3000</p>
                        </div>
                        <div class="stat-icon-des">

                            <h4>Categorías de Cursos de Alta Calidad</h4>
                            <p class="para-stat">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                                ultrices in ligula.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//home-stats-->
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
    <!--/testimonials-->
    <section class="w3l-testimonials" id="testimonials">
        <!-- /grids -->
        <div class="cusrtomer-layout py-5">
            <div class="container py-lg-4 py-md-3 py-2 pb-lg-0">
                <h5 class="title-subw3hny text-center mb-1">Reseñas</h5>
                <h3 class="title-w3l two text-center mb-sm-5 mb-4">
Clientes Felices &  <span
                        class="inn-text">Comentarios</span></h3>
                <!-- /grids -->
                <div class="testimonial-width">
                    <div id="owl-demo1" class="owl-two owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <i class="fas fa-quote-right"></i>
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet elit. Velit beatae
                                            laudantium
                                            voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus
                                            tempora.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="peopl align-self">
                                            <h3>John wilson</h3>
                                            <p class="indentity">Cuidad Ejemplo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <i class="fas fa-quote-right"></i>
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet elit. Velit beatae
                                            laudantium
                                            voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus
                                            tempora.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="peopl align-self">
                                            <h3>Julia sakura</h3>
                                            <p class="indentity">Cuidad Ejemplo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <i class="fas fa-quote-right"></i>
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet elit. Velit beatae
                                            laudantium
                                            voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus
                                            tempora.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="peopl align-self">
                                            <h3>Roy Linderson</h3>
                                            <p class="indentity">Cuidad Ejemplo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <i class="fas fa-quote-right"></i>
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet elit. Velit beatae
                                            laudantium
                                            voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus
                                            tempora.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="peopl align-self">
                                            <h3>Smith Johnson</h3>
                                            <p class="indentity">Cuidad Ejemplo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <i class="fas fa-quote-right"></i>
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet elit. Velit beatae
                                            laudantium
                                            voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus
                                            tempora.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="peopl align-self">
                                            <h3>John wilson</h3>
                                            <p class="indentity">Cuidad Ejemplo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <i class="fas fa-quote-right"></i>
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet elit. Velit beatae
                                            laudantium
                                            voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus
                                            tempora.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="peopl align-self">
                                            <h3>Julia sakura</h3>
                                            <p class="indentity">Cuidad Ejemplo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <i class="fas fa-quote-right"></i>
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet elit. Velit beatae
                                            laudantium
                                            voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus
                                            tempora.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="peopl align-self">
                                            <h3>Roy Linderson</h3>
                                            <p class="indentity">Cuidad Ejemplo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /grids -->
        </div>
        <!-- //grids -->
    </section>
    <!-- //testimonials -->

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
                

                $sql = "SELECT * FROM articulos WHERE estado_articulo = :estado";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    'estado' => 'Publicado'
                ]);
                while($articulos = $stmt->fetch(PDO::FETCH_ASSOC)){
                    $titulo_articulo = $articulos['titulo_articulo'];
                    $articulo_id = $articulos['articulo_id'];
                    $detalle_articulo = substr($articulos['detalle_articulo'], 0, 120);
                    $imagen_articulo = $articulos['imagen_articulo']; 
                    $autor_articulo = $articulos['autor_articulo']; 
                    $fecha_articulo = $articulos['fecha_articulo'];
                    $cant_vista     = $articulos['cant_vista']; ?>
                
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



                ?>
                </section>
    
    <!--//w3l-blog-->

    

    <?php require_once "./includes/footer.php" ;?>

   