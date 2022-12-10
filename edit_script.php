<?php
session_start();

session_start();
if(isset($_SESSION['id'])) {

    echo 'Zalogowany jako ' . $_SESSION['name'] . '</h1><br>';
}else{
        header('Location: index.php');
    }

require_once ('dbcon.php');
$newName = $_POST['new_name'];
$newPass = $_POST['new_pass'];

$dbcon = mysqli_connect(host,name,pass,dbName);


if(isset($_POST['new_name'])){
   $upName = "UPDATE users SET name = '$newName' WHERE id = ' ".$_SESSION['id'] ."'";
   mysqli_query($dbcon, $upName);
    $_SESSION['name'] = $newName;
   header('Location: index.php');

}

if(isset($_POST['new_pass'])){
    $upName = "UPDATE users SET pass = '$newPass' WHERE id = ' ".$_SESSION['id'] ."'";
    mysqli_query($dbcon, $upName);
    header('Location: index.php');

}

if(isset($_POST['new_pass']) && isset($_POST['new_name'])){
    $upName = "UPDATE users SET pass = '$newPass', name = '$newName' WHERE id = ' ".$_SESSION['id'] ."'";
    mysqli_query($dbcon, $upName);
    $_SESSION['name'] = $newName;
    header('Location: index.php');

}


?>