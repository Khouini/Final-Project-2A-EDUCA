<?php
    $mysqli = new mysqli('localhost','root','','niveauscolaire') or die(mysqli_error($mysqli));
    if(isset($_GET['score'])){
        // $score = 10;
        $score = $_GET['score'];
        $mysqli->query("UPDATE scoremath SET score=$score WHERE id=(SELECT id FROM scoremath WHERE id=(SELECT max(id) FROM scoremath));") or die($mysqli->error);
        header("location: ../../views/pagesClasse/3math/Result3math.php");
    }
?>