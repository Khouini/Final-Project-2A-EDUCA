<html lang="en">
<?php
    $mysqli = new mysqli('localhost','root','','niveauscolaire') or die(mysqli_error($mysqli));
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="background-color:CornflowerBlue;" class="bg-gradient">
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
        <h1 class="display-5 fw-normal ps-3 pt-5 mt-5 pb-3">Complétez les opérations quivantes en écrivant le nombre appriprié à la place de chaque point:</h1>
        <div class="container">
            <!-- <div class="row"> -->
            <form name="myForm" id="myForm" class="row" method="post">
                <div class="col  border border-3  border-dark rounded-3 m-2 fs-4 p-2">
                    <div class="my-2">
                        <input id="input1" type="text" class="w-25 border border-2 rounded-3 border-danger mx-2 px-2 " placeholder="............">X 3 = 12
                    </div>
                    <div class="my-2">
                        <input id="input2" type="text" class="w-25 border border-2 rounded-3 border-danger mx-2 px-2" placeholder="............">X 6 = 36
                    </div>
                    <div class="my-2">
                        <input id="input3" type="text" class="w-25 border border-2 rounded-3 border-danger mx-2 px-2" placeholder="............">X 3 = 21
                    </div>
                </div>
                <div class="col  border border-3  border-dark rounded-3 m-2 fs-4 p-2">
                    <div class="my-2">
                        <input id="input4" type="text" class="w-25 border border-2 rounded-3 border-danger mx-2 px-2" placeholder="............">= 5 X 7
                    </div>
                    <div class="my-2">
                        <input id="input5" type="text" class="w-25 border border-2 rounded-3 border-danger mx-2 px-2" placeholder="............">= 6 X 5
                    </div>
                    <div class="my-2">
                        <input id="input6" type="text" class="w-25 border border-2 rounded-3 border-danger mx-2 px-2" placeholder="............">X 3 = 27
                    </div>
                </div>
                <div class="col  border border-3  border-dark rounded-3 m-2 fs-4 p-2">
                    <div class="my-2">
                        <input id="input7" type="text" class="w-25 border border-2 rounded-3 border-danger mx-2 px-2" placeholder="............">= 9 X 9
                    </div>
                    <div class="my-2">
                        <input id="input8" type="text" class="w-25 border border-2 rounded-3 border-danger mx-2 px-2" placeholder="............">= 8 X 5
                    </div>
                    <div class="my-2">
                        <input id="input9" type="text" class="w-25 border border-2 rounded-3 border-danger mx-2 px-2" placeholder="............">= 6 X 4
                    </div>
                </div>
            </form>
            <!-- </div> -->
        </div>
        <button id="submit" class="btn btn-danger fw-bolder mx-3 btn-lg">Vérifier</button>
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
            <a hidden href="../../../controller/3mathProcess/processScore2.php?score=10" id="submit2" class="buttonColor btn btn-primary mt-3 fs-4 rounded-pill  border-light border-3" type="submit">Niveau Suivant</a>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../../../controller/assets/math/scriptMath2.js"></script>
</body>

</html>