<?php
    $mysqli = new mysqli('localhost','root','','niveauscolaire') or die(mysqli_error($mysqli));
    if(isset($_GET['score'])){
        $score = $_GET['score'];
        $mysqli->query("INSERT INTO score (score) VALUES($score)") or  die($mysqli->error) ;  
        header("location: ../../views/pagesClasse/3fr/3fr_2.php");
    }
?>