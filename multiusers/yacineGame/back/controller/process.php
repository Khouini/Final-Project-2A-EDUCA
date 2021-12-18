<?php
session_start();
$mysqli = new mysqli('localhost','root','','niveauscolaire') or die(mysqli_error($mysqli));

$niveau = '';
$update = false;
$id = 0;
//  Save
if (isset($_POST['submit'])){
    $niveau = $_POST['niveau'];
    $mysqli->query("INSERT INTO niveau (niveau) VALUES('$niveau')") or  die($mysqli->error) ;  
    $_SESSION['message']="Record has been saved!";
    $_SESSION['msg_type']='success';
    header("location: ../../../templateBack/niveauCRUD.php");
}
//Delete
if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM niveau WHERE id = $id") or die($mysqli->error);
    $_SESSION['message']="Record has been deleted!";
    $_SESSION['msg_type']="danger";
    header("location: ../../../templateBack/niveauCRUD.php");
}
//Edit
if(isset($_GET['edit']))
{
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM niveau WHERE id = $id") or die($mysqli->error);
    if ($result->num_rows)
    {
        $row = $result->fetch_array();
        $niveau = $row['niveau'];
    }
}
//Updates
if (isset($_POST['update']))
{
    $id = $_POST['id'];
    $niveau = $_POST['niveau'];
    $mysqli->query("UPDATE niveau SET niveau='$niveau' WHERE id = $id") or die($mysqli->error);
    $_SESSION['message']="Record has been updated!";
    $_SESSION['msg_type']="warning";
    header('location: ../../../templateBack/niveauCRUD.php');
}
//Click
if (isset($_GET['niveau'])) {
        $text = $_GET['niveau'];
        if(strcmp($text,'1ére année')==0){  
            header('location: ../../front/views/levelDirector/1er.php'); 
        }
        else if (strcmp($text,'2éme année')==0){  
            header('location: ../../front/views/levelDirector/2éme.php'); 
        }
        else if (strcmp($text,'3éme année')==0){  
            header('location: ../../front/views/levelDirector/3éme.php'); 
        }
        else{
            header('location: ../../front/views/menu/menu1.php'); 
        }
}
if (isset($_GET['3fr'])) {
    header('location: ../../front/views/levelDirector/COJ/3émeFrCOJ.php'); 
}
if (isset($_GET['3math'])) {
    header('location: ../../front/views/levelDirector/COJ/3émeMathCOJ.php'); 
}
if (isset($_GET['3frJeux'])) {
    header('location: ../../front/views/pagesClasse/3fr/3fr.php'); 
}
if (isset($_GET['3frCours'])) {
    header('location: ../../../skanderCours/front/views/3FrCours.php'); 
}
if (isset($_GET['3MathJeux'])) {
    header('location: ../../front/views/pagesClasse/3math/math_1.php'); 
}
if (isset($_GET['3MathCours'])) {
    header('location: ../../../skanderCours/front/views/3MathCours.php'); 
}
?>  