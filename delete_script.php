<?php


session_start();
require_once ('dbcon.php');

$dbcon = mysqli_connect(host,name,pass,dbName);

$select = "SELECT id, name FROM users WHERE id = ' ".$_SESSION['id'] ."' AND name = ' ".$_SESSION['name'] ."'";
$data = mysqli_query($dbcon,$select);

if(mysqli_num_rows($data) == 1) {
    $data_id = mysqli_query($dbcon, $select);
    $row_id = mysqli_fetch_array($data_id);
    if( $_SESSION['id'] == $row_id['id'] && $_SESSION['name'] == $row_id['name']){
        $delete = "DELETE FROM users WHERE id = ' ".$_SESSION['id'] ."' AND name = ' ".$_SESSION['name'] ."' LIMIT 1";
        mysqli_query($dbcon, $delete);
        session_destroy();
        header("Location: index.php");

    }else{
        echo "Brak zmiennych sesyjnych";
        //header("Location: edit.php");
    }


}else{
    echo "Brak danych w bazie";
    //header("Location: edit.php");
}

?>