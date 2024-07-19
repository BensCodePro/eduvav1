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
if (isset($_GET['categoria_id']) && is_numeric($_GET['categoria_id'])) {
    $categoria_id = $_GET['categoria_id'];
    $sql = "SELECT * FROM articulos WHERE categoria_articulo_id = :id AND estado_articulo = :estado ORDER BY cant_vista DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id' => $categoria_id,
        ':estado' => 'Publicado'
    ]);
    $articulos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($articulos as $articulo) {
        $articulo_id = $articulo['articulo_id'];
        $titulo_articulo = $articulo['titulo_articulo'];
        $detalle_articulo = substr($articulo['detalle_articulo'], 0, 300);
        $fecha_articulo = $articulo['fecha_articulo'];
        $imagen_articulo = $articulo['imagen_articulo'];
        $autor_articulo = $articulo['autor_articulo']; 
        // display the post
        ?>
        <div class="single-post-image mb-4">
              <a class="card post-preview lift h-100" href="blogindividual.php?articulo_id=<?php echo $articulo_id; ?>">
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
        <?php
    }
}
?>

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
                    <span class="fa fa-arrow-left mr-2"></span> Prev Post </span>
                  <a href="#url" rel="prev" class="posts-view posts-view-left">
                    <label>Lorem ipsum dolor sit</label>
                  </a>
                </div>
                <div class="post-next col-md-6 pl-sm-5 text-md-right mt-md-0 mt-3">
                  <span class="nav-title">
                    Next Post <span class="fa fa-arrow-right ml-2"> </span><span class="next-post pull-right"></span>
                  </span>
                  <a href="#url" rel="next" class="posts-view posts-view-right">
                    <label>Lorem ipsum dolor sit</label>
                  </a>
                </div>
              </nav>
  
              <div class="comments">
                <h3 class="post-content-title">Comments</h3>
                <div class="media mt-md-4 mt-3">
                  <div class="img-circle">
                    <img src="assets/images/team1.jpg" class="img-fluid" alt="...">
                  </div>
                  <div class="media-body comments-grid-right">
                    <a href="#URL" class="name mt-0">Bradley</a>
                    <ul class="time-rply mb-3">
                      <li>2 Apr 2021
                        <i>|</i>
                      </li>
                      <li>
                        <a href="#reply">Reply</a>
                      </li>
                    </ul>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                      sollicitudin. Cras purus
                      odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc
                      ac nisi vulputate
                      fringilla.</p>
  
                  </div>
                </div>
  
                <div class="media">
                  <div class="img-circle">
                    <img src="assets/images/team2.jpg" class="img-fluid" alt="...">
                  </div>
                  <div class="media-body comments-grid-right">
                    <a href="#URL" class="name mt-0">Harold</a>
                    <ul class="time-rply mb-3">
                      <li>3 Apr 2021
                        <i>|</i>
                      </li>
                      <li>
                        <a href="#reply">Reply</a>
                      </li>
                    </ul>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus ante
                      sollicitudin. Cras purus odio, vestibulum in at, tempus turpis.
                      Fusce nunc ac nisi.</p>
  
                    <div class="media mt-4">
                      <a class="img-circle img-circle-sm" href="#">
                        <img src="assets/images/team3.jpg" class="img-fluid" alt="...">
                      </a>
                      <div class="media-body comments-grid-right">
                        <a href="#URL" class="name mt-0">Dennis Jack</a>
                        <ul class="time-rply mb-3">
                          <li>3 Apr 2021
                            <i>|</i>
                          </li>
                          <li>
                            <a href="#reply">Reply</a>
                          </li>
                        </ul>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel
                          ante. Cras purus odio, in vulputate at.</p>
                      </div>
                    </div>
                  </div>
                </div>
  
                <div class="media mt-5">
                  <div class="img-circle">
                    <img src="assets/images/team4.jpg" class="img-fluid" alt="...">
                  </div>
                  <div class="media-body comments-grid-right">
                    <a href="#URL" class="name mt-0">Anthony</a>
                    <ul class="time-rply mb-3">
                      <li>4 Apr 2021
                        <i>|</i>
                      </li>
                      <li>
                        <a href="#reply">Reply</a>
                      </li>
                    </ul>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                      sollicitudin. Cras purus
                      odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc
                      ac nisi vulputate.</p>
  
                  </div>
                </div>
              </div>
  
              <div class="reply mt-5" id="reply">
                <h3 class="post-content-title py-sm-5 py-4">Leave a reply</h3>
                <form action="#" method="POST">
                  <div class="form-group reply">
                    <div class="input-grids row mb-md-4 mb-3">
  
                      <div class="form-group col-lg-6">
                        <input type="text" name="Name" class="form-control" placeholder="Your Name*" required="">
                      </div>
                      <div class="form-group col-lg-6">
                        <input type="email" name="Email" class="form-control" placeholder="Email*" required="">
                      </div>
                    </div>
                    <textarea class="form-control" placeholder="Your Message" id="exampleFormControlTextarea1"
                      rows="4"></textarea>

                    <div class="text-right">
                      <button class="btn btn-primary btn-style" type="submit">Post Comment</button>
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


  