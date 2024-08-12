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
    <!-- Head of the table -->
    <tr>
        <th>#</th>
        <th>Categorías</th>
        <th>Cant Articulos</th>
        <th>Cant. Vistas</th>
        <th>Creado por</th>
        <th>Estado</th>
        <th>Editar</th>
        <th>Borrar</th>
    </tr>
</thead>
<tbody>

    <?php
    // Take the categories from database

    $sql = "SELECT * FROM categorias";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    while ($categorias = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // GET ALL DATA FROM CATEGORY TABLE
        $categoria_id = $categorias["categoria_id"];
        $categoria_nombre = $categorias["categoria_nombre"];
        $categoria_estado = $categorias["categoria_estado"];
        $fecha_creado = $categorias["fecha_creado"];
        $creado_por = $categorias["creado_por"];

    
        

        // Assuming you have columns for cant_articulo and total_vista_articulo in your categorias table
        $categoria_cant_articulo = $categorias["categoria_cant_articulo"];
        $total_vista_articulo = $categorias["total_vista_articulo"];
    ?>
        <tr>
            <td><?= $categoria_id ?></td>
            <td>
                <a href="../nuestroblog.php?categoria_id=<?php echo $categoria_id;?>&categoria_nombre=<?php echo $categoria_nombre; ?>" target="_blank">
                    <?php  echo $categoria_nombre;?>
                </a>
            </td>
            <td><?= $categoria_cant_articulo ?></td>
            <td><?= $total_vista_articulo ?></td>
            <td><?= $creado_por ?></td>
        

            <td>
                <?php if ($categoria_estado == 1) { ?>
                    <div class="badge badge-danger"> NO Publicado</div>
                <?php } else { ?>
                    <div class="badge badge-success"> Publicado</div>
                <?php } ?>
            </td>
            <td>
                <button class="btn btn-primary btn-icon"><i data-feather="edit"></i></button>
            </td>
            <td>
                <button class="btn btn-danger btn-icon"><i data-feather="trash-2"></i></button>
            </td>
        </tr>
    <?php
    }
    ?>
</tbody>  
                                </table>
                            </div>
                        </div>
                    </div>

                </main>

                <?php require_once "./includes/footer.php" ;?>