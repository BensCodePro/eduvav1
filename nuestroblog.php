<?php require_once "./includes/blog-header.php";?>


<!-- breadcrumb banner del blog -->
<section class="w3l-about-breadcrumb text-center">

    <div class="breadcrumb-bg breadcrumb-bg-about py-5">

        <div class="container py-lg-5 py-md-4">

            <div class="w3breadcrumb-gids">

                <div class="w3breadcrumb-left text-left">

                    <h2 class="title AboutPageBanner">Página de nuestro Blog</h2>

                    <p class="inner-page-para mt-2">

                    Aprenda sobre nosostros  en cualquier momento y en cualquier lugar.

                        Acelera tu futuro.

                    </p>

                </div>

                <div class="w3breadcrumb-right">

                    <ul class="breadcrumbs-custom-path">

                        <li><a href="inicio.php">Inicio</a></li>

                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span>Nuestro Blog</li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>

<!--//breadcrumb end banner del-->


<!--/w3l-blog section start here-->


<section class="w3l-blog">

    <div class="blog py-5" id="Newsblog">

        <div class="container py-lg-5 py-md-4 py-2">

            <h5 class="title-subw3hny text-center mb-1">Nuestro Artículo</h5>

            <h3 class="title-w3l text-center mb-sm-5 mb-4">Mantente Actualizado Con Nuestro<br>

                <span class="inn-text">Canal De Noticias.</span>

            </h3>

            <div class="row">

                <?php
                // SELECT TO DISPLAYU ARTICLE ON OUR BLOG PAGE

                $limit =5; // number of posts per page

                $sql = "SELECT * FROM articulos WHERE estado_articulo = :estado";

                $stmt = $pdo->prepare($sql);

                $stmt->execute([

                    'estado' => 'Publicado'

                ]);

                $total_posts = $stmt->rowCount();

                $total_pages = ceil($total_posts / $limit);

                $page = isset($_GET['page'])? $_GET['page'] : 1;

                $offset = ($page - 1) * $limit;

                $sql = "SELECT * FROM articulos WHERE estado_articulo = :estado LIMIT $limit OFFSET $offset";

                $stmt = $pdo->prepare($sql);

                $stmt->execute([

                    'estado' => 'Publicado'

                ]);

                while ($articulos = $stmt->fetch(PDO::FETCH_ASSOC)) {

                    $titulo_articulo = $articulos['titulo_articulo'];

                    $articulo_id = $articulos['articulo_id'];

                    $detalle_articulo = substr($articulos['detalle_articulo'], 0, 120);

                    $imagen_articulo = $articulos['imagen_articulo'];

                    $autor_articulo = $articulos['autor_articulo'];

                    $fecha_articulo = $articulos['fecha_articulo'];

                    $cant_vista = $articulos['cant_vista'];

                   ?>

                    <div class="col-lg-4 col-md-6 item">

                        <div class="card">

                            <div class="card-header p-0 position-relative">

                                <a href="blogindividual.php?articulo_id=<?php echo $articulo_id;?>" class="zoom d-block">

                                    <img class="card-img-bottom d-block" src="assets/images/<?php echo $imagen_articulo;?>"

                                         alt="Card image cap">

                                </a>

                            </div>

                            <div class="card-body blog-details">

                                <a href="blogindividual.php" class="blog-desc"><?php echo $titulo_articulo;?>

                                    <p><?php echo $detalle_articulo;?></p>

                                </a>

                            </div>

                            <div class="card-footer d-flex align-items-center justify-content-between">

                                <div class="author align-items-center">

                                    <a href="blogindividual.php" class="post-author">

                                        <img src="assets/images/<?php echo $imagen_articulo;?>" alt="" class="img-fluid rounded-circle">

                                    </a>

                                    <ul class="blog-meta">

                                        <li>

                                            <span class="meta-value">por</span><a href="blogindividual.php"><?php echo $autor_articulo;?></a>

                                        </li>

                                    </ul>

                                    <div class="date">

                                        <p><?php echo date("d M, Y", strtotime($fecha_articulo));?></p>

                                    </div>

                                </div>

                                <div class="post-preview-meta">

                                    <?php echo $cant_vista;?>

                                </div>

                            </div>

                        </div>

                    </div>

                <?php }?>

            </div>

        </div>

    </div>

</section>
    <!--//w3l-blog EN OF OUR BLOG  ARTICLE PAGE-->

         <!--/pagination start here-->
<?php
if ($total_posts > $page) {?>
  <div class="pagination-wrapper mt-5 pt-lg-3">
    <ul class="page-pagination">
      <?php 
      if(isset($_GET['page'])){
        $prev = $_GET['page'] - 1;
      }else{
        $prev = 0;
      }
      if($prev > 0){
        echo '<li><a class="prev" href="nuestroblog.php?page='. $prev. '">previous</a></li>';
      }else{
        echo '<li><span aria-current="page" class="page-numbers current disabled">previous</span></li>';
      }
     ?>
      <?php
      if (isset($_GET['page'])) {
        $active = $_GET['page'];
      } else {
        $active = 1;
      }

      for ($i = 1; $i <= ceil($total_posts / $page); $i++) {
        if ($i == $active) {
          echo '<li><span class="page-numbers active">'. $i. '</span></li>';
        } else {
          echo '<li><a class="page-numbers" href="nuestroblog.php?page='. $i. '">'. $i. '</a></li>';
        }
      }

      // Check if there is a next page
      if ($active < ceil($total_posts / $page)) {
      ?>
        <li><a class="next" href="nuestroblog.php?page=<?php echo $active + 1;?>">Next <span class="fa fa-angle-right"></span></a></li>
      <?php }?>

    </ul>
  </div>
  <!--//pagination End here-->
<?php }?>
</div>

</div>
</section>

<!--//w3l-blog-->

  <?php require_once "./includes/footer.php" ;?>