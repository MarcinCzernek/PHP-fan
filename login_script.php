<?php

session_start();
require_once ('dbcon.php');

$dbcon = mysqli_connect(host,name,pass,dbName);

$name = mysqli_real_escape_string($dbcon,$_POST['name']);
$pass = mysqli_real_escape_string($dbcon,$_POST['pass']);


     if(isset($_POST['name']) && isset($_POST['pass'])){

        $select_by_id = "SELECT id, name FROM users WHERE name = '$name' AND pass = '$pass'";
        $data = mysqli_query($dbcon,$select_by_id);

    if(mysqli_num_rows($data) == 1){
        $data_id = mysqli_query($dbcon, $select_by_id);
        $row_id = mysqli_fetch_array($data_id);
        $_SESSION['id'] = $row_id['id'];
        $_SESSION['name'] = $row_id['name'];
        header('Location: index.php');
    }
    else{
        echo "Nieprawidłowa nazwa lub hasło" . "<br>";
    }


}else{
    echo "Wprowadź nazwę lub hasło";
}

?>
