<html lang="en">
    <?php
        $mysqli = new mysqli('localhost','root','','skander') or die(mysqli_error($mysqli));
        $check = $mysqli->query("SELECT * FROM datap WHERE ((annee='3') AND (matiere='Math'));") or  die($mysqli->error) ;  
        $check2 = $mysqli->query("SELECT * FROM datap WHERE ((annee='3') AND (matiere='Math'));") or  die($mysqli->error) ;  
    
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 Math Cours</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php 
   session_start();
   include "../../../omar/db_conn.php";
?>
        <nav style="background-color:DarkSlateBlue;" class="navbar navbar-expand-lg bg-gradient navbar-dark fixed-top">
            <div class="container">
                <a href="../../../templateFront/index.php" class="navbar-brand fs-3 font-monospace">EDUCA</a>
                <div class="collapse navbar-collapse justify-content-lg-between" id="nav-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-lg-2">
                            <a href="../../../templateFront/index.php" class="nav-link">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a href="../../../yacineGame/front/views/menu/game.php" class="nav-link">Consulter cours et jeux</a>
                        </li>
                        <li class="nav-item">
                            <a href="../../../../ekhdem/index.php" class="nav-link">Blog</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i>
                                <?=$_SESSION['name']?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="../../../omar/logout.php"><i class="bi bi-box-arrow-left"></i>  Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
        </nav>
    <h1 class="container mt-4 text-danger fs-1 font-monospace text-center">Les cours:</h1>
            <div style="background-color:CornflowerBlue;" class="container border border-dark border-3 rounded mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom du cours</th>
                            <th scope="col">Année scolaire</th>
                            <th scope="col">Matiére</th>
                            <th scope="col">pdf</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($rowv = $check->fetch_assoc()): ?>
                        <tr>
                            <td></td>
                            <td><?php echo $rowv['itemName']; ?></td>
                            <td><?php echo $rowv['annee']; ?></td>
                            <td><?php echo $rowv['matiere']; ?></td>
                            <td><?php echo $rowv['pdf']; ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
            <div>
                <?php while ($rowa = $check2->fetch_assoc()): ?>
                    <div class="container py-3 my-3 border border-4 border-danger">
                    <h1 class="container mt-4 text-danger fs-3 font-monospace text-center">Cours: <?php echo $rowa['itemName']; ?></h1>
                        <embed class="text-center" src="<?php echo $rowa['pdf']; ?>#toolbar=0" type="application/pdf" width="70%" height="70%">
                    </div>
                <?php endwhile; ?>
            </div>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>