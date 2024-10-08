<?php require_once "./includes/header.php" ;?>
    <body class="nav-fixed">
                <!--Top nav bar en Here-->

    <?php require_once "./includes/top-navbar.php" ;?>
      <!--Top nav bar en Here-->
      

       

        <!--Side Nav-->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                
            <?php require_once "./includes/left-sidebar.php" ;?>



            </div>


            <div id="layoutSidenav_content">
                <main>
                    <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                        <div class="container-fluid">
                            <div class="page-header-content">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="edit-3"></i></div>
                                    <span>Create New Category</span>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <!--Start Table-->
                    <div class="container-fluid mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">Create New Category</div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="post-title">Category Name:</label>
                                        <input class="form-control" id="post-title" type="text" placeholder="Category Name..." />
                                    </div>
                                    <div class="form-group">
                                        <label for="post-status">Status:</label>
                                        <select class="form-control" id="post-status">
                                            <option>Published</option>
                                            <option>Draft</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary mr-2 my-1" type="button">Submit now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End Table-->
                </main>

                <?php require_once "./includes/footer.php" ;?>