<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<article class="form">
    <h1>Zaloguj się</h1><br>

    <form  action="login_script.php" method="post">
        <fieldset>
            Nazwa:<input name="name" type="text"/>
            Hasło:<input name="pass" type="password" id="passId">
            <fieldset/>
            <input type="submit" name="submit" value="Zaloguj się">

    </form>
</article>

</body>
</html>
