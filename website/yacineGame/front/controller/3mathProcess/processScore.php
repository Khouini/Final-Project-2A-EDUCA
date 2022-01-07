<?php
    $mysqli = new mysqli('localhost','root','','niveauscolaire') or die(mysqli_error($mysqli));
    if(isset($_GET['score'])){
        $score = $_GET['score'];
        $mysqli->query("INSERT INTO scoremath (score) VALUES($score)") or  die($mysqli->error) ;  
        header("location: ../../views/pagesClasse/3math/math_2.php");
    }
?>