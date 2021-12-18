<?php

 require('actions/database.php');


  if(isset($_GET['lid'])) {
    $did=$_GET['lid'];
    $didr='0';
      
$stmt = $bdd->prepare("UPDATE `questions` SET `like` ='$didr' WHERE `questions`.`id` = '$did'");
    $stmt->execute();
}

  if(isset($_GET['did'])) {
      $lid=$_GET['did'];
      $lidr='1';
      
$stmt = $bdd->prepare("UPDATE `questions` SET `like` ='$lidr' WHERE `questions`.`id` = '$lid'");
$stmt->execute();
  }
  

header('location:index.php');



?>