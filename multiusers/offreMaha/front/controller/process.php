<?php

$mysqli = new mysqli('localhost','root','','maha') or die(mysqli_error($mysqli));

$itemName = '';
$price = '';
$update = false;
$id = 0;
//  Save
if (isset($_GET['commande1'])){
    $id = $_GET['commande1'];
    $result = $mysqli->query("SELECT * FROM datap WHERE id = $id") or die($mysqli->error);
    if ($result->num_rows)
    {
        $row = $result->fetch_array();
        $itemName = $row['itemName'];
        $price = $row['price'];
    }
    $mysqli->query("INSERT INTO commande (itemName, price) VALUES('$itemName',$price)") or die($mysqli->error) ; 
    header("location: ../../../templateFront/index.php");

}
// Delete
if (isset($_GET['delete'])){
    $idc = $_GET['delete'];
    $mysqli->query("DELETE FROM commande WHERE id = $idc") or die($mysqli->error);
    header("location: ../../../templateFront/index.php");
}
?>  