<?php 
   include "../omar/db_conn.php";
?>
<?php require_once '../offreMaha/back/controller/process2.php'; ?>
<?php
        $mysqli = new mysqli('localhost','root','','maha') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM datap") or die($mysqli->error);
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>comptes</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Admin</div>
                </a>
                <!-- Heading -->
                <div class="sidebar-heading">
                    Interface
                </div>
                <!-- Heading -->



                <!-- Nav Item - Gestion des comptes -->
                <li class="nav-item">
                    <a class="nav-link" href="user.php">
                        <i class="bi bi-people"></i>
                        <span>Gestion des comptes</span></a>
                </li>

                <!-- Nav Item - Gestion de jeux (niveau) -->
                <li class="nav-item">
                    <a class="nav-link" href="niveauCRUD.php">
                        <i class="bi bi-controller"></i>
                        <span>Gestion de jeux (niveau)</span></a>
                </li>
                <!-- Nav Item - Gestion de cours  -->
                <li class="nav-item">
                    <a class="nav-link" href="courManager.php">
                        <i class="bi bi-book"></i>
                        <span>Gestion de cours</span></a>
                </li>
                <!-- Nav Item - Gestion d'abonnement  -->
                <li class="nav-item">
                    <a class="nav-link" href="abonnementManager.php">
                        <i class="bi bi-bag"></i>
                        <span>Gestion d'abonnement</span></a>
                </li>
                <!-- Nav Item - Gestion d'offre  -->
                <li class="nav-item  active">
                    <a class="nav-link" href="offreManager.php">
                        <i class="bi bi-coin"></i>
                        <span>Gestion d'offre</span></a>
                </li>
                <!-- Nav Item - Gestion de réclamation  -->
                <li class="nav-item">
                    <a class="nav-link" href="../../ekhdem/my-questions.php">
                        <i class="bi bi-exclamation-triangle"></i>
                        <span>Gestion de blog</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                        <!-- Topbar Search -->
                    <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <form class="d-flex" action="" method="post">
                                <input name="searchInput" class="form-control me-2 mx-2" placeholder="Search">
                                <button name="searchbtn" class="btn btn-dark">Search</button>
                            </form>
                        </div>
                    </div>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$_SESSION['name']?></span>
                                    <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <?php if (isset($_SESSION['message'])): ?>
                            <div class="alert alert-<?=$_SESSION['msg_type']?>">
                        <?php
                        echo $_SESSION['message'];
                        unset($_SESSION['message']); 
                    ?>
                    </div>
                        <?php endif ?>
                        <!-- Page Heading -->
                        <!-- <h1 class="h3 mb-4 text-gray-800">Blank Page</h1> -->
                        <div class="container py-2 border border-dark border-3 rounded mt-3">
                            <div class="justify-content-center">
                                <form action="../offreMaha/back/controller/process2.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <label for="nameI" class="form-label">Nom de l'offre: </label>
                                        </div>
                                        <div class="col-auto">
                                            <input name="nameI" type="text" class="form-control" placeholder="Enter le nom de l'offre" value="<?php echo $name; ?>">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <label for="prixI" class="form-label">Prix: </label>
                                        </div>
                                        <div class="col-auto">
                                            <input name="prixI" name="submit" type="text" class="form-control" placeholder="Entrer le prix" value="<?php echo $prix; ?>">
                                        </div>
                                    </div>
                                    <br>
                                    <?php if ($update == true): ?>
                                    <button name="update" class="btn btn-outline-secondary fs-5 border-2">Update</button>
                                    <?php else : ?>
                                    <button name="submit" class="btn btn-outline-primary fs-5 border-2">Save</button>
                                    <?php endif; ?>
                                </form>
                            </div>
                        </div>
                        <div class="container border border-dark border-3 rounded mt-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nom de l'offre</th>
                                        <th scope="col">Prix</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                while ($row = $result->fetch_assoc()): ?>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <?php echo $row['itemName']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['price']; ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-info" href="offreManager.php?edit=<?php echo $row['id']; ?>">Edit</a>
                                                <a class="btn btn-danger" href="../offreMaha/back/controller/process2.php?delete=<?php echo $row['id']; ?>">Delete</a>
                                            </td>
                                        </tr>
                                        <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- -------------------------------------------------2-------------------------------------------------- -->
                        <?php
        if (isset($_POST['searchbtn'])){
            
            $searchInput = $_POST['searchInput'];
            $resultResearch = $mysqli->query("SELECT * FROM datap WHERE concat (`itemName`,`price`) LIKE  '%$searchInput%';") or  die($mysqli->error) ;  
    ?>
                            <div class="container border border-warning border-3 rounded mt-4">
                                <h1 class="fs-1 font-monospace text-center">Trouvé:</h1>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nom de l'offre</th>
                                            <th scope="col">Prix</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                        while ($rowv = $resultResearch->fetch_assoc()): ?>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <?php echo $rowv['itemName']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $rowv['price']; ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-info" href="offreManager.php?edit=<?php echo $rowv['id']; ?>">Edit</a>
                                                    <a class="btn btn-danger" href="../offreMaha/back/controller/process2.php?delete=<?php echo $rowv['id']; ?>">Delete</a>
                                                </td>
                                            </tr>
                                            <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php } ?>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; EDUCA 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="../omar/logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

    </body>

    </html>