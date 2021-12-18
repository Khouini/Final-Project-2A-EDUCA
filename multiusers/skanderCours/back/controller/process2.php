<?php

session_start();
$mysqli = new mysqli('localhost','root','','skander') or die(mysqli_error($mysqli));

$name = '';
$annee = '';
$matiere = '';
$update = false;
$id = 0;
//  Save
if (isset($_POST['submit'])){
    $name = $_POST['nameI'];
    $annee = $_POST['anneeI'];
    $matiere = $_POST['matiereI'];
    $file = $_FILES["pdf"]["name"];
    $mysqli->query("INSERT INTO datap (itemName, annee, matiere, pdf) VALUES('$name',$annee,'$matiere','$file')") or  die($mysqli->error) ;  
    move_uploaded_file($file = $_FILES["pdf"]["tmp_name"],"$file");
    $_SESSION['message']="Record has been saved!";
    $_SESSION['msg_type']='success';
    header("location: ../../../templateBack/courManager.php");
}
 //Delete
 if (isset($_GET['delete'])){
     $id = $_GET['delete'];
     $mysqli->query("DELETE FROM datap WHERE id = $id") or die($mysqli->error);
     $_SESSION['message']="Record has been deleted!";
     $_SESSION['msg_type']="danger";
     header("location: ../../../templateBack/courManager.php");
 }
 //Edit
 if(isset($_GET['edit']))
 {
     $id = $_GET['edit'];
     $update = true;
     $result = $mysqli->query("SELECT * FROM datap WHERE id = $id") or die($mysqli->error);
     if ($result->num_rows)
     {
         $row = $result->fetch_array();
         $name = $row['itemName'];
         $annee = $row['annee'];
         $matiere = $row['matiere'];
         
     }
 }
 //Updates
if (isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['nameI'];
    $annee = $_POST['anneeI'];
    $matiere = $_POST['matiereI'];
    $mysqli->query("UPDATE datap SET itemName='$name', annee='$annee', matiere='$matiere' WHERE id = $id") or die($mysqli->error);
    $_SESSION['message']="Record has been updated!";
    $_SESSION['msg_type']="warning";
    header('location: ../../../templateBack/courManager.php');
}
?>