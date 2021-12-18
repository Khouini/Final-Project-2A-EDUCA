<?php
    $mysqli = new mysqli('localhost','root','','niveauscolaire') or die(mysqli_error($mysqli));
    if(isset($_GET['score'])){
        // $score = 10;
        $score = $_GET['score'];
        $mysqli->query("UPDATE score SET score=$score WHERE id=(SELECT id FROM score WHERE id=(SELECT max(id) FROM score));") or die($mysqli->error);
        header("location: ../../views/pagesClasse/3fr/3fr_3.php");
    }
?>