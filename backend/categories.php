<?php require_once "./includes/header.php" ;?>
<body class="nav-fixed">
    <!--Top nav bar en Here-->

    <?php require_once "./includes/top-navbar.php" ;?>
    <!--Top nav bar en Here-->

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <!--Side Nav start here-->

            <?php require_once "./includes/left-sidebar.php" ;?>

        </div>
        <!-- Nav sidebar finish here -->

        <div id="layoutSidenav_content">
            <main>
                <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                    <div class="container-fluid">
                        <div class="page-header-content d-flex align-items-center justify-content-between text-white">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="chevrons-up"></i></div>
                                <span>Categorías</span>
                            </h1>
                            <a href="new-category.html" title="Add new category" class="btn btn-white">
                                <div class="page-header-icon"><i data-feather="plus"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Table start here-->
                <div class="container-fluid mt-n10">

                    <div class="card mb-4">
                        <div class="card-header">Todas las Categorías</div>
                        <div class="card-body">
                            <div class="datatable table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                             <!--Head of the table-->
                                        <tr>
                                            <th>#</th>
                                            <th>Categorías</th>
                                            <th>Cant Articulos</th>
                                            <th>Cant.Vistas</th>
                                            <th>Creado por</th>
                                            <th>Estado</th>
                                            <th>Editar</th>
                                            <th>Borrar</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                    // Take the categories from database

                                    $sql = "SELECT a.*, c.categoria_nombre 
                                    FROM articulos a 
                                    INNER JOIN categorias c ON a.categoria_articulo_id = c.categoria_id 
                                    WHERE a.estado_articulo = :estado 
                                    ORDER BY a.fecha_creado DESC";

                                    $stmt = $pdo->prepare($sql);
                                    $stmt->bindParam(':estado', $estado);
                                    $estado = 1; // or 0, depending on the state you want to filter by
                                    $stmt->execute();
                                    $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                    foreach($categorias as $categoria){
                                        // GET ALL DATA FROM CATEGORY TABLE
                                        $categoria_id = $categoria['categoria_id'];
                                        $articulo_id   = $categoria['articulo_id'];
                                        $categoria_nombre = $categoria['categoria_nombre'];
                                        $categoria_cant_articulo  = $categoria['categoria_cant_articulo'];
                                        $total_vista_articulo     = $categoria['total_vista_articulo'];
                                        $categoria_estado         = $categoria['categoria_estado'];
                                        $fecha_creado             = $categoria['fecha_creado'];
                                        $creado_por               = $categoria['creado_por'];

                                     ?>

                                        <tr>
                                            <td><?= $categoria_id?></td>
                                            <td>
                                                <a href="../articles.php/?categoria_id=<?=$categoria_id?>">
                                                <?= $categoria_nombre?>
                                                </a>
                                            </td>
                                            <td><?= $categoria_cant_articulo?></td>
                                            <td><?= $total_vista_articulo?></td>
                                            <td><?= $creado_por?></td>
                                            <td>
                                                <?php if($categoria_estado == 1){?>
                                                    <div class="badge badge-success">Publicado</div>
                                                <?php } else {?>
                                                    <div class="badge badge-danger">No Publicado</div>
                                                <?php }?>
                                            </td>
                                            <td>
                                                <button class="btn btn-blue btn-icon"><i data-feather="edit"></i></button>
                                            </td>
                                            <td>
                                                <button class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                                            </td>
                                        </tr>

                                    <?php }?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </main>

                <?php require_once "./includes/footer.php" ;?>