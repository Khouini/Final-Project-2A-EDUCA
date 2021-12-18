<?php 
    session_start();
    require('C:\xampp\htdocs\ekhdem\actions\questions\showAllQuestionsAction.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    <style>
.fa {
  font-size: 80px;
  cursor: pointer;
  user-select: none;
  
}

.fa:hover {
  color: darkblue;
}
</style>
    </head>
<?php include 'includes/head.php'; ?>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Forum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    =
  </div>
</nav>    <br><br>

    <div class="container">
    
        <form method="GET">

            <div class="form-group row">

                <div class="col-8">
                    <input type="search" name="search" class="form-control">
                </div>
                <div class="col-4">
                    <button class="btn btn-success" type="submit">Rechercher</button>
                </div>

            </div>
        </form>

        <br>

        <?php 
            while($question = $getAllQuestions->fetch()){
                ?>
                <div class="card">
                    <div class="card-header">
                        <a href="articlefront.php?id=<?= $question['id']; ?>">
                            <?= $question['titre']; ?>
                        </a>
                    </div>
                    <div class="card-body">
                        <?= $question['description']; ?>
                        
                    </div>
                    <div class="card-footer">
                        Publié par <a href="profile.php?id=<?= $question['id_auteur']; ?>"><?= $question['pseudo_auteur']; ?></a> le <?= $question['date_publication']; ?>
            
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
           <a href='process.php?lid=<?php echo $id; ?>'>liked <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
 </a>
           <?php
        }
        else
        { ?>
              <a href='process.php?did=<?php echo $id; ?>'>Disliked </a>
              
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