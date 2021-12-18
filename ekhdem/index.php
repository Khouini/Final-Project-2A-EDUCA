<?php 
    session_start();
    require('C:\xampp\htdocs\ekhdem\actions\questions\showAllQuestionsAction.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        .fa {
            font-size: 80px;
            cursor: pointer;
            user-select: none;
        }
        
        .fa:hover {
            color: darkblue;
        }
        
        body {
            background-image: url('a.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>
</head>
<?php include 'includes/head.php'; ?>

<body>
    <?php 
   session_start();
   include "../multiusers/omar/db_conn.php";
?>
    <nav style="background-color:DarkSlateBlue;" class="navbar navbar-expand-lg bg-gradient navbar-dark fixed-top">
        <div class="container">
            <a href="../multiusers/templateFront/index.php" class="navbar-brand fs-3 font-monospace">EDUCA</a>
            <div class="collapse navbar-collapse justify-content-lg-between" id="nav-menu">
                <ul class="navbar-nav">
                    <li class="nav-item mx-lg-2">
                        <a href="../multiusers/templateFront/index.php" class="nav-link">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a href="../multiusers/yacineGame/front/views/menu/game.php" class="nav-link">Consulter cours et jeux</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Blog</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i>
                            <?=$_SESSION['name']?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="../multiusers/omar/logout.php"><i class="bi bi-box-arrow-left"></i>  Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <br><br>

    <div class="container">

        <form method="GET">

            <div class="form-group row">

                <div class="col-8">
                    <input type="search" name="search" class="form-control">
                </div>
                <div class="col-4">
                    <button style="background-color:DarkSlateBlue;" class="btn btn-outline-light" type="submit">Rechercher</button>
                </div>

            </div>
        </form>

        <br>

        <?php 
            while($question = $getAllQuestions->fetch()){
                ?>
        <div class="card  border border-3 border-rounded mt-5 p-2 border-dark">
            <div class="card-header">
                <a class="display-6 fs-5 text-warning fw-normal" href="article.php?id=<?= $question['id']; ?>">
                    <?= $question['titre']; ?>
                </a>
            </div>
            <div class="card-body">
                <?= $question['description']; ?>

            </div>
            <div class="card-footer">
                Publié par
                <a class="display-6 fs-5 text-warning fw-normal"  href="profile.php?id=<?= $question['id_auteur']; ?>">
                    <?= $question['pseudo_auteur']; ?>
                </a> le
                <?= $question['date_publication']; ?>

            </div>
            <div>
                <?php

$stmt = $bdd->query('SELECT * FROM questions ORDER BY id DESC');
    $stmt->execute();
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
        
        extract($row);
        ?>
                    <?php if ($like==1) 
        {  
            ?>
                    <a class="display-6 fs-5 text-danger fw-normal" href='process.php?lid=<?php echo $id; ?>'>liked <i onclick="myFunction(this)" class="bi bi-hand-thumbs-up-fill"></i>
 </a>
                    <?php
        }
        else
        { ?>
                        <a class="display-6 fs-5 text-danger fw-normal" href='process.php?did=<?php echo $id; ?>'>Disliked <i class="bi bi-hand-thumbs-down-fill"></i> </a>

                        <?php
    }
        ?>
                            <hr>
                            <?php

    }
    ?>
            </div>
            <br>
            <?php
            }
        ?>

        </div>


        <script>
            function myFunction(x) {
                x.classList.toggle("fa-thumbs-down");
            }
        </script>



</body>

</html>