<?php

session_start();

require_once ('dbcon.php');

$dbc = mysqli_connect(host,name,pass,dbName);

if(isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($dbc, $_POST['name']);
    $pass = mysqli_real_escape_string($dbc, $_POST['pass']);

    if (!empty($name) && !empty($pass)) {

        $select_by_id = "SELECT id, name FROM users WHERE name = '$name' AND pass = SHA('$pass')";
        $select_by_id = "SELECT id, name FROM users WHERE name = '$name' AND pass = '$pass'";
        $data = mysqli_query($dbc, $select_by_id);

        if (mysqli_num_rows($data) == 1) {

            $data_id = mysqli_query($dbc, $select_by_id);
            $row_id = mysqli_fetch_array($data_id);
            $_SESSION['id'] = $row_id['id'];
            $_SESSION['name'] = $row_id['name'];
            header('Location: menu.php');

        } else {
            echo "<p style='color: red'>Nieprawidłowa nazwa lub hasło</p>";
        }
    }
}

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <fieldset>
        <legend>Logowanie</legend>
        <label for="username">Nazwa użytkownika:</label>
        <input type="text" name="name" value="<?php if (!empty($user_username)) echo $user_username; ?>" /><br />
        <label for="password">Hasło:</label>
        <input type="password" name="pass" />
    </fieldset>
    <input type="submit" value="Zaloguj" name="submit" />
</form>