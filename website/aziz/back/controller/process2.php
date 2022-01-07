<?php

session_start();
$mysqli = new mysqli('localhost','root','','aziz') or die(mysqli_error($mysqli));

$name = '';
$prix = '';
$update = false;
$id = 0;
//  Save
if (isset($_POST['submit'])){
    $name = $_POST['nameI'];
    $prix = $_POST['prixI'];
    $mysqli->query("INSERT INTO datap (itemName, price) VALUES('$name',$prix)") or  die($mysqli->error) ;  
    $_SESSION['message']="Record has been saved!";
    $_SESSION['msg_type']='success';
    header("location: ../../../templateBack/abonnementManager.php");
}
 //Delete
 if (isset($_GET['delete'])){
     $id = $_GET['delete'];
     $mysqli->query("DELETE FROM datap WHERE id = $id") or die($mysqli->error);
     $_SESSION['message']="Record has been deleted!";
     $_SESSION['msg_type']="danger";
     header("location: ../../../templateBack/abonnementManager.php");
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
         $prix = $row['price'];
     }
 }
 //Updates
if (isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['nameI'];
    $prix = $_POST['prixI'];
    $mysqli->query("UPDATE datap SET itemName='$name', price='$prix' WHERE id = $id") or die($mysqli->error);
    $_SESSION['message']="Record has been updated!";
    $_SESSION['msg_type']="warning";
    header('location: ../../../templateBack/abonnementManager.php');
}
?>