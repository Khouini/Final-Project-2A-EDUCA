<html lang="en">
<?php 
   session_start();
   include "../omar/db_conn.php";
?>
<?php require_once '../aziz/front/controller/process.php'; ?>
<?php require_once '../offreMaha/front/controller/process.php'; ?>
    <?php
        $mysqli = new mysqli('localhost','root','','aziz') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM datap") or die($mysqli->error);
        $total=0;
    ?>

    <?php
        $mysqli2 = new mysqli('localhost','root','','maha') or die(mysqli_error($mysqli));
        $result2 = $mysqli2->query("SELECT * FROM datap") or die($mysqli->error);
        $total2=0;
    ?>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EDUCA</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/style.css">
    </head>

    <body>
        <!-- navbar -->
        <nav style="background-color:DarkSlateBlue;" class="navbar navbar-expand-lg navbar-dark fixed-top bg-gradient">
            <div class="container-fluid px-lg-5 mx-lg-5">
                <img src="img/eudu.png"  alt="" height="40px" class="me-3 d-none d-lg-block ">
                <a href="" class="navbar-brand fs-3 font-monospace">EDUCA</a>
                <div class="collapse navbar-collapse justify-content-lg-between" id="nav-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-lg-2">
                            <a href="index.php" class="nav-link">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a href="../yacineGame/front/views/menu/game.php" class="nav-link">Consulter cours et jeux</a>
                        </li>
                        <li class="nav-item">
                            <a href="../../ekhdem/index.php" class="nav-link">Blog</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i>
                                <?=$_SESSION['name']?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="../omar/logout.php"><i class="bi bi-box-arrow-left"></i>  Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
        </nav>
        <!-- Intro -->
        <section style="background-color:CornflowerBlue;" class=" text-light text-center text-sm-start ps-5 py-4 bg-gradient">
            <div class="container d-flex align-items-sm-center">
                <div>
                    <span style="color:WhiteSmoke;" class="display-2 fw-normal " id="yace">EDUCA</span>
                    <h1 class="display-5 fw-normal" id="yac">Réviser en ligne</h1>
                    <p fs-3>Afin de vous préparer pour le semestre à venir, veuillez consulter le programme des cours pour y trouver des infos sur les objectifs, les lectures et ressources, le détail des cours, etc. Des questions ? Pas de soucis ! Contactez-moi
                        dès aujourd'hui.
                    </p>
                </div>
                <img class="img-fluid d-none d-lg-block ps-5 ms-5" src="img/picture2.png" alt="">
            </div>
        </section>
        <!-- end intro -->

        <!-- cards -->
        <section class="p-4">
            <div class="container">
                <div class="row text-center d-flex justify-content-between">
                    <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="col">
                        <div style="background-color:DarkSlateBlue;" class="card text-light">
                            <div class="h1 m-3">
                                <i class="bi bi-hexagon"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                <?php echo $row['itemName']; ?>
                            </h3>
                            <p class="card-text mx-5 mb-3">Price:
                                <?php echo $row['price']; ?>
                            </p>
                            <a href="../aziz/front/controller/process.php?commande1=<?php echo $row['id']; ?>" name="submit" class="btn btn-outline-light mx-5 mb-3 border-2">Réserver</a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
        <?php
        $commande = $mysqli->query("SELECT * FROM commande") or die($mysqli->error);
    ?>
            <div class="container border border-dark border-2 rounded mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom de l'abonnement</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    while ($rowc = $commande->fetch_assoc()): ?>
                            <tr>
                                <td></td>
                                <td>
                                    <?php echo $rowc['itemName']; ?>
                                </td>
                                <td>
                                    <?php echo $rowc['price']; ?>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="../aziz/front/controller/process.php?delete=<?php echo $rowc['id']; ?>">Delete</a>
                                </td>
                                <?php $total = $total + $rowc['price']; ?>
                            </tr>
                            <?php endwhile; ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <p class="fw-bold">Total:
                                        <?php echo $total; ?>
                                    </p>
                                </td>
                                <td></td>
                            </tr>
                    </tbody>
                </table>
            </div>
            <div class="container my-3 d-flex justify-content-end">
                <a style="background-color:DarkSlateBlue;" href="../aziz/front/controller/process3.php?passFormulaire" class="btn btn-outline-light  border-2">Passer au formulaire de paiement d'abonnement</a>
            </div>
            <hr class="container">
            <!-- end cards -->
            <!-- Leran Fondamentals-->
            <!-- cards 2 -->
        <section class="p-2">
            <div class="container">
                <div class="row text-center d-flex justify-content-between">
                    <?php while ($rowt = $result2->fetch_assoc()): ?>
                        <div class="col">
                            <div style="background-color:Thistle;" class="card text-light bg-gradient">
                                <div class="h1 m-3">
                                    <i class="bi bi-hexagon"></i>
                                </div>
                                <h3 class="card-title mb-3"><?php echo $rowt['itemName']; ?></h3>
                                <p class="card-text mx-5 mb-3">Price: <?php echo $rowt['price']; ?></p>
                                <a href="../offreMaha/front/controller/process.php?commande1=<?php echo $rowt['id']; ?>" name="submit" class="btn btn-outline-light border-3 mx-5 mb-3">Réserver</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php
        $commande2 = $mysqli2->query("SELECT * FROM commande") or die($mysqli->error);
    ?>
    <div class="container border border-dark border-2 rounded mt-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom de l'offre</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($rowp = $commande2->fetch_assoc()): ?>
                    <tr>
                        <td></td>
                        <td><?php echo $rowp['itemName']; ?></td>
                        <td><?php echo $rowp['price']; ?></td>
                        <td>
                            <a class="btn btn-danger" href="../offreMaha/front/controller/process.php?delete=<?php echo $rowp['id']; ?>">Delete</a>
                        </td>
                        <?php $total2 = $total2 + $rowp['price']; ?>
                    </tr>
                    <?php endwhile; ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><p class="fw-bold">Total: <?php echo $total2; ?></p></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
    </div>
    <div class="container mt-3 d-flex justify-content-end">
        <a style="background-color:WhiteSmoke;" href="../offreMaha/front/controller/process3.php?passFormulaire" class="btn btn-outline-dark">Passer au formulaire de paiement d'offre</a>
    </div>
            <section class="text-dark p-5" id="learn">
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-md d-flex justify-content-center">
                            <img src="img/picture1.png" class="img-fluid w-100" alt="">
                        </div>
                        <div class="col-md p-3">
                            <h1>L'enseignement primaire</h1>
                            <p>
                                Afin de vous préparer pour le semestre à venir, veuillez consulter le programme des cours pour y trouver des infos sur les objectifs, les lectures et ressources, le détail des cours, etc. Des questions ? Pas de soucis ! Contactez-moi dès aujourd'hui.
                            </p>
                            <a style="background-color:DarkSlateBlue;" href="../yacineGame/front/views/menu/game.php" class="fw-bold btn btn-outline-light" >Consulter Cours et Jeux</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Insctructors -->
            <section style="background-color:CornflowerBlue;" class=" text-dark p-5 bg-gradient">
                <div class="container">
                    <div class="text-center p-3">
                        <h2>Les instructeurs</h1>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-sm-6 col-lg-3 mt-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img class="img-fluid card-title" src="img/yacine.jpg" alt="">
                                    <h5 class="card-title">Med Yacine Khouini</h5>
                                    

                                    <i class="bi bi-twitter"></i>
                                    <i class="bi bi-linkedin"></i>
                                    <i class="bi bi-facebook"></i>
                                    <i class="bi bi-instagram"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 mt-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img class="img-fluid card-title" src="img/maram.jpg" alt="">
                                    <h5 class="card-title">Maram Brinsi</h5>
                                    

                                    <i class="bi bi-twitter"></i>
                                    <i class="bi bi-linkedin"></i>
                                    <i class="bi bi-facebook"></i>
                                    <i class="bi bi-instagram"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 mt-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img class="img-fluid card-title" src="img/aziz.jpg" alt="">
                                    <h5 class="card-title">Aziz Abourgui</h5>
                                    

                                    <i class="bi bi-twitter"></i>
                                    <i class="bi bi-linkedin"></i>
                                    <i class="bi bi-facebook"></i>
                                    <i class="bi bi-instagram"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 mt-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img class="img-fluid card-title" src="img/maha.jpg" alt="">
                                    <h5 class="card-title">Maha Maatoog</h5>
                                    

                                    <i class="bi bi-twitter"></i>
                                    <i class="bi bi-linkedin"></i>
                                    <i class="bi bi-facebook"></i>
                                    <i class="bi bi-instagram"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 mt-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img class="img-fluid card-title" src="img/skander.jpg" alt="">
                                    <h5 class="card-title">Skander Chekir</h5>
                                    

                                    <i class="bi bi-twitter"></i>
                                    <i class="bi bi-linkedin"></i>
                                    <i class="bi bi-facebook"></i>
                                    <i class="bi bi-instagram"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 mt-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img class="img-fluid card-title" src="img/omar.jpg" alt="">
                                    <h5 class="card-title">Omar Saya</h5>
                                    

                                    <i class="bi bi-twitter"></i>
                                    <i class="bi bi-linkedin"></i>
                                    <i class="bi bi-facebook"></i>
                                    <i class="bi bi-instagram"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </div>
            <!-- end instructors -->
            <!-- contact & map -->
            <section class="py-5 px-3">
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col">
                            <h2 class="text-center">Contact Info</h2>
                            <ul class="list-group list-group-flush lead">
                                <li class="list-group-item">
                                    <span class="fw-bold">Main Location: </span>Avenue Behi Ladgham - Immeuble Nejmedine Hassouna 8050 Hammamet - Tunisie
                                </li>
                                <li class="list-group-item">
                                    <span class="fw-bold">Enrollment Phone: </span>94 959 175
                                </li>
                                <li class="list-group-item">
                                    <span class="fw-bold">Enrollment Email: </span>educa@gmail.com
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <div class="d-flex justify-content-center align-items-center pt-3">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d802.767836653734!2d10.609594829168898!3d36.40746907809531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd61e513d91f2d%3A0x97d58e8e085d0a61!2sBooster%20BC!5e0!3m2!1sfr!2stn!4v1628503292069!5m2!1sfr!2stn"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end contact & map -->
            <!-- footer -->
            <footer style="background-color:DarkSlateBlue;" class="p-4 text-white text-center position-relative">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-center">
                        <p class="lead">Copyright &copy; EDUCA</p>
                        <a href="#" class="position-absolute bottom-0 end-0 p-5">
                            <i class="bi bi-arrow-up-circle h2"></i>
                        </a>
                    </div>
                </div>
            </footer>
            <!-- end footer -->
            <!-- Modal -->
            <div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="enrollLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5 class="text-center">
                                S'enregistrer
                                </h1>
                                <form>
                                    <div>
                                        <label for="first-name" class="col-form-label">Nom</label>
                                        <input type="text" class="form-control" id="first-name">
                                    </div>
                                    <div>
                                        <label for="last-name" class="col-form-label">Prenom</label>
                                        <input type="text" class="form-control" id="last-name">
                                    </div>
                                    <div>
                                        <label for="email" class="col-form-label">Email</label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                    <div>
                                        <label for="Phone" class="col-form-label">Numéro de téléphone</label>
                                        <input type="text" class="form-control" id="Phone">
                                    </div>
                                </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
    </html