<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout cours</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="">
    <?php require_once '../controller/process2.php'; ?> 
    <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-<?=$_SESSION['msg_type']?>">
            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']); 
            ?>
        </div>
    <?php endif ?>
    <?php
        $mysqli = new mysqli('localhost','root','','skander') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM datap") or die($mysqli->error);
    ?>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand">Cours</a>
            <form class="d-flex" action="" method="post">
                 <input name="searchInput" class="form-control me-2" placeholder="Search">
                <button name="searchbtn" class="btn btn-outline-light">Search</button>
            </form>
        </div>
    </nav>
    <div class="container py-2 border border-dark border-3 rounded mt-3">
        <div class="justify-content-center">
            <form action="../controller/process2.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="row align-items-center">
                    <div class="col-auto">
                            <label for="nameI" class="form-label">Nom du cours: </label>
                    </div>
                    <div class="col-auto">
                        <input name="nameI" type="text" class="form-control" placeholder="Enter le nom du cours" 
                        value="<?php echo $name; ?>">
                    </div>
                </div>
                <br>
                <div class="row align-items-center">
                    <div class="col-auto">
                        <label for="anneeI" class="form-label">Année scolaire: </label>
                    </div>
                    <div class="col-auto">
                        <input name="anneeI" name="submit" type="text" class="form-control" 
                        placeholder="Entrer l'annee scolaire" 
                        value="<?php echo $annee; ?>">
                    </div>
                </div>
                <br>
                <div class="row align-items-center">
                    <div class="col-auto">
                            <label for="matiereI" class="form-label">Matiére: </label>
                    </div>
                    <div class="col-auto">
                        <input name="matiereI" type="text" class="form-control" placeholder="Enter la matiére" 
                        value="<?php echo $matiere; ?>">
                    </div>
                </div>
                <br>
                <!-- file -->
                <div class="row align-items-center">
                    <div class="col-auto">
                            <label for="matiereI" class="form-label">PDF: </label>
                    </div>
                    <div class="col-auto">
                        <input name="pdf" type="file" class="form-control">
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
                    <th scope="col">Nom du cours</th>
                    <th scope="col">Année scolaire</th>
                    <th scope="col">Matiére</th>
                    <th scope="col">PDF</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td></td>
                    <td><?php echo $row['itemName']; ?></td>
                    <td><?php echo $row['annee']; ?></td>
                    <td><?php echo $row['matiere']; ?></td>
                    <td><?php echo $row['pdf']; ?></td>
                    <td>
                        <a class="btn btn-info" href="ajout.php?edit=<?php echo $row['id']; ?>">Edit</a>
                        <a class="btn btn-danger" href="../controller/process2.php?delete=<?php echo $row['id']; ?>">Delete</a>
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
            $resultResearch = $mysqli->query("SELECT * FROM datap WHERE concat (`itemName`,`annee`,`matiere`) LIKE  '%$searchInput%';") or  die($mysqli->error) ;  
    ?>
            <div class="container border border-warning border-3 rounded mt-4">
                <h1 class="fs-1 font-monospace text-center">Trouvé:</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom du cours</th>
                            <th scope="col">Année scolaire</th>
                            <th scope="col">Matiére</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($rowv = $resultResearch->fetch_assoc()): ?>
                        <tr>
                            <td></td>
                            <td><?php echo $rowv['itemName']; ?></td>
                            <td><?php echo $rowv['annee']; ?></td>
                            <td><?php echo $rowv['matiere']; ?></td>
                            <td>
                                <a class="btn btn-info" href="ajout.php?edit=<?php echo $rowv['id']; ?>">Edit</a>
                                <a class="btn btn-danger" href="../controller/process2.php?delete=<?php echo $rowv['id']; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>