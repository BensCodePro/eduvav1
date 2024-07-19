<?php
// Start Session
 session_start();
 ob_start();
?>

<?php require_once "./includes/blog-header.php" ;?>
<?php require_once "./includes/db.php"; ?>

  <!-- breadcrumb -->
  <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="w3breadcrumb-gids">
          <div class="w3breadcrumb-left text-left">
            <h2 class="title AboutPageBanner">
              Blog Single </h2>
            <p class="inner-page-para mt-2">
              Learn Anytime, Anywhere.
              Accelerate Your Future.</p>
          </div>
          <div class="w3breadcrumb-right">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Blog Single</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//breadcrumb-->
    <!--/w3l-blog-->

    <section class="w3l-blog bloghny-page">
      <div class="blog py-5" id="blogpage">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="bloghnypage-left blog-single-post">

            <?php 
if(isset($_GET['articulo_id']) && is_numeric($_GET['articulo_id'])) {
  $articulo_id = $_GET['articulo_id'];
  $sql = "SELECT * FROM articulos  WHERE articulo_id = :id";
  $stmt= $pdo->prepare($sql);
  $stmt->execute([
    ':id' => $articulo_id
  ]);
  $articulos = $stmt->fetch(PDO::FETCH_ASSOC);
  if($articulos) {
    $titulo_articulo = $articulos['titulo_articulo'];
    $detalle_articulo = $articulos['detalle_articulo'];
    $imagen_articulo = $articulos['imagen_articulo'];
    $autor_articulo = $articulos['autor_articulo'];
    $fecha_articulo = $articulos['fecha_articulo'];
  } else {
    $articulos = null;
  }
} else {
  $articulos = null;
}

if($articulos === null): ?>
  <p>Articulo no se encuentra</p>
<?php else: ?>
              <div class="single-post-image mb-4">
                <img src="assets/images/<?php echo $imagen_articulo; ?>" class="img-fluid w-100 radius-image" alt="blog-post-image">
              </div>
              <div class="blo-singl mb-5">
                <ul class="blog-single-author-date d-sm-flex align-items-center">
                  <li class="circle avatar"><img src="assets/images/<?php echo $imagen_articulo; ?>" alt="single post image" class="img-fluid">
                  </li>
                  <li>
                    <span class="fas fa-user"></span><a href="#admin"><?php echo $autor_articulo; ?></a>
                  </li>
                  <li>
                    <p><span class="fas fa-clock"></span><?php echo $fecha_articulo; ?></p>
                  </li>
                  <li>
                    <a href="#comments"><span class="fas fa-comments"></span> 3</a>
                  </li>
                </ul>
              </div>
              <div class="single-post-content">
                <h3 class="post-content-title mb-3"><?php echo $titulo_articulo; ?></h3>
              
                <p class="mb-4"><?php echo $detalle_articulo; ?> </p>
               
              </div>
              <div class="single-post-content my-md-5 mt-5 mb-3">
                <h3 class="post-content-title mb-3"><?php echo $titulo_articulo; ?></h3>
                <p class="mb-4"><?php echo $detalle_articulo; ?></p>
                <div class="two-columns row single-post-content mt-4">
                  <div class="col-md-6 left-column">
                    <img src="assets/images/<?php echo $imagen_articulo; ?>" class="img-fluid radius-image" alt="image">
                  </div>
                  <div class="col-md-6 right-column align-self">
                    <p class="mt-md-0 mt-4"><?php echo $detalle_articulo; ?></p>
                  </div>
                </div>
              </div>
  
              <div class="single-post-content mb-4">
                <p class="mb-4"><?php echo $detalle_articulo; ?> </p>
              </div>

              <?php endif; ?>
              <ul class="share-post mb-5 text-right">
                <li class="facebook">
                  <a href="#link" title="Facebook">
                    <span class="fab fa-facebook-f" aria-hidden="true"></span>
                  </a>
                </li>
                <li class="twitter">
                  <a href="#link" title="Twitter">
                    <span class="fab fa-twitter" aria-hidden="true"></span>
                  </a>
                </li>
                <li class="google">
                  <a href="#link" title="Google">
                    <span class="fab fa-pinterest-p" aria-hidden="true"></span>
                  </a>
                </li>
              </ul>

             
  
              <nav class="post-navigation row mb-5 py-4">
                <div class="post-prev col-md-6 pr-sm-5">
                  <span class="nav-title">
                    <span class="fa fa-arrow-left mr-2"></span>Articulos anteriores</span>
                  <a href="#url" rel="prev" class="posts-view posts-view-left">
                    <label>Lorem ipsum dolor sit</label>
                  </a>
                </div>
                <div class="post-next col-md-6 pl-sm-5 text-md-right mt-md-0 mt-3">
                  <span class="nav-title">
                    Articulos siguientes <span class="fa fa-arrow-right ml-2"> </span><span class="next-post pull-right"></span>
                  </span>
                  <a href="#url" rel="next" class="posts-view posts-view-right">
                    <label>Lorem ipsum dolor sit</label>
                  </a>
                </div>
              </nav>

              

              <?php 

$sql4 = "SELECT * FROM comentarios  WHERE com_estado = :estado";
$stmt = $pdo->prepare($sql4);
$stmt->execute([
    ':estado'=> 'aprobado', 
]);

$count = $stmt->rowCount();
if($count ==  0){
    echo " No se encuentra el comentario";
} else {


    while($comentarios = $stmt->fetch(PDO::FETCH_ASSOC)){
        $com_titulo        =  $comentarios['com_titulo'];
        $com_articulo_id   =  $comentarios['com_articulo_id'];
        $com_imagen        =  $comentarios['com_imagen'];
        $com_detalle       =  $comentarios['com_detalle'];
        $com_usuario_id    =  $comentarios['com_usuario_id'];
        $com_autor         =  $comentarios['com_autor'];
        $com_estado        =  $comentarios['com_estado'];
        $com_usuario_id    =  $comentarios['com_usuario_id'];
        $com_date          =  $comentarios['com_date'];?>

        <!-- Start of the comment Section start here -->
        <div class="comments">
          <h3 class="post-content-title"><?php echo $com_titulo;?></h3>
          <div class="media mt-md-4 mt-3">
            <div class="img-circle">
              <img src="assets/images/<?php echo $com_imagen;?>" class="img-fluid" alt="...">
            </div>
            <div class="media-body comments-grid-right">
              <a href="#URL" class="name mt-0"><?php echo $com_autor;?></a>
              <ul class="time-rply mb-3">
                <li><?php echo $com_date;?> <i>|</i></li>
                <li><a href="#reply"><?php echo $com_estado;?></a></li>
              </ul>
              <p><?php echo $com_detalle;?></p>
            </div>
          </div>

        <?php 
    }
}
?>

    <?php 
  // Assuming $pdo is your PDO connection object
  if(isset($_COOKIE['_uid_']) || isset($_COOKIE['_uiid_']) || isset($_SESSION['login'])) {?>
    <div class="reply mt-5" id="reply">
      <h3 class="post-content-title py-sm-5 py-4">Deja una respuesta</h3>
      <!-- Work with the database here -->
      <?php 
      if(isset($_POST['submit'])){
          $comentarios = trim($_POST['comentarios']);
          $sql3 = "INSERT INTO comentarios(com_articulo_id, com_detalle, com_imagen, com_autor, com_titulo, com_estado, com_date) 
                  VALUES(:com_articulo_id, :com_detalle, :com_imagen, :com_autor, :com_titulo, :com_estado, :com_date)";
          $stmt = $pdo->prepare($sql3);
          $stmt->execute([
              ':com_articulo_id' => $_POST['articulo_id'],
              ':com_detalle'     => $comentarios,
              ':com_imagen'      => 'team1.jpg', // You didn't provide a value for this field
              ':com_autor'       => $_POST['nombres'], // Assuming you want to use the name as author
              ':com_titulo'      => 'Comentario', // You didn't provide a value for this field
              ':com_estado'      => 'noaprobado',
              ':com_date'        => date("M j, Y") . ' ' . date("h:i A")
          ]);
      }
      ?>

      <form action="blogindividual.php" method="POST">
        <input type="hidden" name="articulo_id" value="<?php echo $articulo_id; ?>"> <!-- Add this line to pass the articulo_id -->
        <div class="form-group reply">
          <div class="input-grids row mb-md-4 mb-3">
            <div class="form-group col-lg-6">
              <input type="text" name="nombres" class="form-control" placeholder="Tu nombre*" required="">
            </div>
            <div class="form-group col-lg-6">
              <input type="email" name="correo" class="form-control" placeholder="Tu correo*" required="">
            </div>
          </div>
          <textarea class="form-control" name="comentarios" placeholder="Tus mensajes" id="exampleFormControlTextarea1" rows="4"></textarea>
          <div class="text-right">
            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-style">Publicar comentario</button>
          </div>
          
        </div>
      </form>
    </div>
  <?php } else {
    echo "<a href='./backend/signin.php'> Tienes que ingresar para comentar</a>";
  }
  ?>
</div>
      
                         <!--End of the comment Section  -->
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </section>
    </div>
    <!--//w3l-blog-->

      
    <?php require_once "./includes/footer.php" ;?>


