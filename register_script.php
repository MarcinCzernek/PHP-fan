<?php
require_once ('dbcon.php');

$name = $_POST['name'];
$pass = $_POST['pass'];

$dbcon = mysqli_connect(host,name,pass,dbName);

$insert = "INSERT INTO users (name,pass) values('$name','$pass')";
$select = "SELECT * FROM users where name = '$name'";

if(isset($_POST['name']) && isset($_POST['pass'])){

$check = mysqli_query($dbcon,$select);
if(mysqli_num_rows($check) == 0){
    mysqli_query($dbcon,$insert);
    $data = mysqli_query($dbcon,$select);
    $row = mysqli_fetch_array($data);
    $_SESSION['id'] = $row['id'];
    echo "OK";
    header('Location: index.php');
}else{
    echo "Podana nazwa już istnieje" . "<br>";
    echo "<a href='register.php'>Powrót</a>";
}

}else{
    header('Location: register.php');
    echo "Enter name & password";
}

?>