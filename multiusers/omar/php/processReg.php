<?php
    session_start();
    // cnx

    $mysqli = new mysqli('localhost','root','','my_db') or die(mysqli_error($mysqli));

    $username='';
    $name='';
    $password='';
    $role='';

    $update = false;
    $id = 0;

    //  Save
    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $mysqli->query("INSERT INTO users (role, username, password, name) VALUES ('$role', '$username', '$password', '$name')") or  die($mysqli->error) ;  
        header("location: ../thankyou.php");
    }
    //Delete
    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM users WHERE id = $id") or die($mysqli->error);
        header("location: ../home.php");
    }
?>