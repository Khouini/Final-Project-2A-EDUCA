<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3éme année COJ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-image: url('a.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>
</head>

<body class="">
<?php 
   session_start();
   include "../../../../../omar/db_conn.php";
?>
        <nav style="background-color:DarkSlateBlue;" class="navbar navbar-expand-lg bg-gradient navbar-dark fixed-top">
            <div class="container">
                <a href="../../../../../templateFront/index.php" class="navbar-brand fs-3 font-monospace">EDUCA</a>
                <div class="collapse navbar-collapse justify-content-lg-between" id="nav-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-lg-2">
                            <a href="../../../../../templateFront/index.php" class="nav-link">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a href="../../../../../yacineGame/front/views/menu/game.php" class="nav-link">Consulter cours et jeux</a>
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
    <?php require_once '../../../../back/controller/process.php'; ?> 
    <section id="container1" class="container">
        <h1 id="educaText" class=" display-2 text-center fw-bold mt-5">3éme année math</h1>
    </section>
    <div class="container pt-5">
        <section class="row">
            <div class="col d-flex justify-content-center">
                <a href="../../../../back/controller/process.php?3MathCours" class="btn btn-outline-dark btn-lg border-3">
                    <span class="fs-1">Cours</span>
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="../../../../back/controller/process.php?3MathJeux" class="btn btn-outline-dark btn-lg border-3">
                    <span class="fs-1">Jeux</span>
                </a>
            </div>
    </div>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>