<?php require_once "./includes/header.php" ;?>
    <body class="nav-fixed">
           <!--Top nav bar en Here-->

    <?php require_once "./includes/top-navbar.php" ;?>
      <!--Top nav bar en Here-->
      
        

        <!--Side Nav start here-->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
            <?php require_once "./includes/left-sidebar.php" ;?>
                
                
                </div>
          

                <!--Footer user  Info end here-->


            <!--Details card Info about  Blog articles start here-->
            <div id="layoutSidenav_content">
                <main>
                    <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                        <div class="container-fluid">
                            <div class="page-header-content">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="activity"></i></div>
                                    <span>Educablog panel</span>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <!--Table-->
                    <div class="container-fluid mt-n10">

                    <!--Card Primary-->
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <p>Todos Articulos</p>
                                    <?php
                                    $sql = " SELECT * FROM  articulos WHERE estado_articulo = :estado";
                                    $stmt = $pdo->prepare($sql);
                                    $stmt->execute([
                                        ':estado' => 'Publicado'
                                    ]);

                                    $post_count = $stmt->rowCount();
                                    
                                    ?>
                                    <p><?php echo $post_count; ?></p>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="all-post.php">Ver detalles</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <p>Commentarios</p>
                                    <?php
                                    
                                $sql = "SELECT * FROM comentarios";

                                 $stmt = $pdo->prepare($sql);

                                 $stmt->execute();

                                $comment_count = $stmt->rowCount();

                                   ?>
                                    <p><?php echo $comment_count; ?></p>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="comments.php">Ver detalles</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <p>Categorías</p>
                                    <?php
                                    
                                    $sql = "SELECT * FROM categorias";
    
                                     $stmt = $pdo->prepare($sql);
    
                                     $stmt->execute();
    
                                    $categorias_count = $stmt->rowCount();
    
                                       ?>
                                        <p><?php echo $categorias_count; ?></p>
                                    

                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="categories.php">Ver detalles</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <p>Usuarios</p>
                                    <?php 

                                    $sql = "SELECT * FROM usuarios";
                                    $stmt = $pdo->prepare($sql);
                                    $stmt->execute();

                                    $user_count = $stmt->rowCount();

                                    
                                    
                                    ?>

                                    <p><?php echo $user_count; ?></p>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="users.php">Ver detalles</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
            <!--Details card Info about  Blog articles finish here-->
                  <!--Card Primary-->


<div class="card mb-4">

<div class="card-header">Articulos Populares:</div>

<div class="card-body">

    <div class="datatable table-responsive">

        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">

            <thead>

                <tr>

                    <th>#</th>

                    <th>Titulos</th>

                    <th>Detalles articulos</th>

                    <th>Categorias</th>

                    <th>Vista</th>

                    <th>Estado</th>

                    <th>Comentarios</th>

                    <th>Fotos</th>

                    <th>Autor</th>

                    <th>Fechas</th>

                </tr>

            </thead>

            <tbody>

                <?php 

                $sql = "SELECT a.*, c.categoria_nombre 

                        FROM articulos a 

                        INNER JOIN categorias c ON a.categoria_articulo_id = c.categoria_id 

                        WHERE a.estado_articulo = :estado ORDER BY cant_vista LIMIT 0, 9 ";

                $stmt = $pdo->prepare($sql);

                $stmt->execute([

                    ':estado' => 'Publicado'

                ]);


                // Bring our article to the front end

                while($articulos = $stmt->fetch(PDO::FETCH_ASSOC)){

                    //Take data from the database

                    $articulo_id            = $articulos['articulo_id'];

                    $titulo_articulo        = $articulos['titulo_articulo'];

                    $detalle_articulo       = $articulos['detalle_articulo'];

                    $categoria_articulo_id  = $articulos['categoria_articulo_id'];

                    $categoria_nombre       = $articulos['categoria_nombre'];

                    $fecha_articulo         = $articulos['fecha_articulo'];

                    $autor_articulo         = $articulos['autor_articulo'];

                    $autor_foto             = $articulos['autor_foto'];

                    $cant_vista             = $articulos['cant_vista'];

                    $cant_comentario        = $articulos['cant_comentario'];

                    $palabras_claves        = $articulos['palabras_claves'];

                    $imagen_articulo        = $articulos['imagen_articulo'];

               ?>

                <tr>

                    <td><?php echo $articulo_id;?></td>

                    <td><?php echo $titulo_articulo;?></td>

                    <td>

                        <a href="../blogindividual.php?articulo_id=<?php echo $articulo_id;?>" target="_blank">

                            <?php echo $detalle_articulo;?>

                        </a>

                    </td>

                    <td> <?php echo $categoria_nombre;?></td>

                    <td><?php echo $cant_vista;?></td>

                    <td>Publicado</td> <!-- You didn't have a column for estado, so I assumed it's always Publicado -->

                    <td><?php echo $cant_comentario;?></td>

                    <td><img src="../img/<?php echo $imagen_articulo;?>" height="50" width="50"></td>

                    <td><?php echo $autor_articulo;?></td>

                    <td><?php echo $fecha_articulo;?></td>

                </tr>

                <?php }?>

            </tbody>

        </table>

    </div>

</div>

</div>

<!--End Table-->
                </main>

                <?php require_once "./includes/footer.php" ;?>

                