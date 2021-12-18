<html lang="en">
<?php require_once '../../../controller/3frProcess/processScore.php'; ?> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Français 3éme année</title>
    <link rel="stylesheet" href="../../../controller/assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<?php 
   session_start();
   include "../../../../../omar/db_conn.php";
?>
        <nav  style="background-color:DarkSlateBlue;" class="navbar navbar-expand-lg bg-gradient navbar-dark fixed-top">
            <div class="container">
                <a href="../../../../../templateFront/index.php" class="navbar-brand fs-3 font-monospace">EDUCA</a>
                <div class="collapse navbar-collapse justify-content-lg-between" id="nav-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-lg-2">
                            <a href="../../../../../templateFront/index.php" class="nav-link">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a href="../../menu/game.php" class="nav-link">Consulter cours et jeux</a>
                        </li>
                        <li class="nav-item">
                            <a href="../../../../../../ekhdem/index.php" class="nav-link">Blog</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i>
                                <?=$_SESSION['name']?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="../../../../../omar/logout.php"><i class="bi bi-box-arrow-left"></i>  Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
        </nav>
    <section class="container">
        <h1 class="display-5 fw-normal ps-3 pt-5 mt-5">Je mets les étiquettes en ordre.</h1>
        <div class="container1 d-flex justify-content-start">
            <p class="draggable mx-2 fs-5 fw-bolder text-light border-light" draggable="true">jouent</p>
            <p class="draggable mx-2 fs-5 fw-bolder text-light border-light" draggable="true">Les élèves</p>
            <p class="draggable mx-2 fs-5 fw-bolder text-light border-light" draggable="true">la cours</p>
            <p class="draggable mx-2 fs-5 fw-bolder text-light border-light" draggable="true">dans</p>
        </div>
        <div class="container1 d-flex justify-content-start">
        </div>
        <button id="submit" class="buttonColor btn btn-primary mt-3 fs-4 rounded-pill  border-light border-3" type="submit">Vérifier</button>
        <section class="py-3 textColor">
            <h1 id="result1" class="fs-3 px-5 font-monospace text-success fw-bold"></h1>
            <div>
                <h1 id="result3" class="fs-3 px-5 font-monospace text-danger fw-bold"></h1>
                <span id="resutScore" class="fs-4 text-danger fw-bolder px-5"></span>
            </div>
            <ul id="result2" class="list-group list-group-flush fw-light border-3 rounded-3">
            </ul>
        </section>
        <div class="d-flex justify-content-end">
            <a hidden href="../../../controller/3frProcess/processScore.php?score=5" id="submit2" class="buttonColor btn btn-primary mt-3 fs-4 rounded-pill  border-light border-3" type="submit">Niveau Suivant</a>
        </div>
    </section>
    <script src="../../../controller/assets/scriptNiveau1Fr.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>