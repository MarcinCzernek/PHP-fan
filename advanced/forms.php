<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css" type="text/css" />
    <title>Document</title>
</head>
<body>
<header>
    <h2 class="box">Formularze</h2>
</header>
<article>
    <p>Poniżej przykład zwykłego formularza napisanego w HTML</p>
    <code>
        &ltform action="login_script.php" method="post">
            Nazwa: &ltinput type="text" name="name">&ltbr>
            Hasło: &ltinput type="password" name="passs">&ltbr>
        &ltinput type="submit">
        &lt/form>
    </code>
    <p>
    <form action="#" method="post">
        Nazwa: <input type="text" name="name"><br>
        Hasło: <input type="password" name="passs"><br>
        <input type="submit">
    </form>
    </p>
    <p>Do pobierania danych z formularzy wykorzystywane są zmienne superglobalne $_POST i $_GET</p>
    <p>Ze względów bezpieczeństwa przesyłanych danych lepiej zawsze stosować zmienne typu POST.</p>
    <p>Przesłane dane w formularzu kierowane są na skrypt php podany w action gdzie przypisane są do zmiennych po czym mogą byc przykładowo porównane z danymi z bazy</p>
    <code>
        //w pliku login_script
        $name = $_POST['name'];
        $pass = $_POST['pass'];


    </code>
    <br><br><br><br><br>
    <a href="../chapter/advanced.php" class="button">Powrót</a>
    <br><br>
</article>
</body>
</html>