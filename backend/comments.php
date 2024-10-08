<?php require_once "includes/header.php" ;?>
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
                                    <div class="page-header-icon"><i data-feather="package"></i></div>
                                    <span>All Comments</span>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <!--Start Table-->
                    <div class="container-fluid mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">All Comments</div>
                            <div class="card-body">
                                <div class="datatable table-responsive">
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>User Name</th>
                                                <th>User Email</th>
                                                <th>In response to</th>
                                                <th>Details</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Approve</th>
                                                <th>Decline</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    Md. A. Barik
                                                </td>
                                                <td>
                                                    mdabarik19@gmail.com
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        Post Title
                                                    </a>
                                                </td>
                                                <td>Details</td>
                                                <td>17 Nov 2020</td>
                                                <td>
                                                    <div class="badge badge-success">
                                                        Approved
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-success btn-icon"><i data-feather="check"></i></button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-red btn-icon"><i data-feather="delete"></i></button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>  
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    Md. A. Barik
                                                </td>
                                                <td>
                                                    mdabarik19@gmail.com
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        Post Title
                                                    </a>
                                                </td>
                                                <td>Details</td>
                                                <td>17 Nov 2020</td>
                                                <td>
                                                    <div class="badge badge-success">Approved
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-success btn-icon"><i data-feather="check"></i></button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-red btn-icon"><i data-feather="delete"></i></button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>                     
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Table-->

                </main>

                <?php require_once "./includes/footer.php" ;?>