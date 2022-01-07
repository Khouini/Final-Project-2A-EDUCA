<?php
    session_start();
    $mysqli = new mysqli('localhost','root','','maha') or die(mysqli_error($mysqli));
    if (isset($_GET['passFormulaire'])) {
        header('location: ../views/formulairePaiement.php'); 
    }
    if (isset($_POST['submit'])){
        $nameHolder = $_POST['nameHolder'];
        $MM = $_POST['MM'];
        $YY = $_POST['YY'];
        $cardNumber = $_POST['cardNumber'];
        $cvc = $_POST['cvc'];
        $mysqli->query("INSERT INTO clients (cardholder, mm, yy, cardnumber, cvc) VALUES('$nameHolder',$MM,$YY,$cardNumber,$cvc)") or  die($mysqli->error) ;  
        header("location: ../views/invoice.php");
    }
?>