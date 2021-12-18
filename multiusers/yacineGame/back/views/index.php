<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter année scolaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="p-5 m-2">
    <?php require_once '../controller/process.php'; ?> 
    <?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']); 
        ?>
    </div>
    <?php endif ?>
    <?php
        $mysqli = new mysqli('localhost','root','','niveauscolaire') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM niveau") or die($mysqli->error);
    ?>
    <div class="container border border-primary border-2 rounded mb-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Année Scolaire</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td></td>
                    <td><?php echo $row['niveau']; ?></td>
                    <td>
                        <a class="btn btn-info" href="index.php?edit=<?php echo $row['id']; ?>">Edit</a>
                        <a class="btn btn-danger" href="../controller/process.php?delete=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
        <div class="container py-2 border border-primary border-2 rounded">
            <div class="justify-content-center">
                <form action="../controller/process.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <label for="niveau" class="form-label">Année scolaire: </label>
                        </div>
                        <div class="col-auto">
                            <input name="niveau" type="text" id="nameInput" class="form-control" placeholder="Enter l'année scolaire" 
                            value="<?php echo $niveau; ?>">
                        </div>
                    </div>
                    <br>
                    <?php if ($update == true): ?>
                    <button name="update" class="btn btn-outline-secondary">Update</button>
                    <?php else : ?>
                    <button name="submit" class="btn btn-outline-primary">Save</button>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>