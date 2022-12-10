<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<header>Wyrażenia regularne</header>
<article>

<form method="post" action="irregular.php">
    <p>Podaj wzorzec np. /^[a-zA-Z0-9.\-_]+@[a-zA-Z0-9\-.]+\.[a-zA-Z]{2,4}$/</p>
    <input type="text" name="pattern"><br>
    <p>Przykładowe pole</p>
<input type="text" name="name"><br>
    <input type="submit" value="Wyślij"><br>

    <?php

    if(isset($_POST['pattern'])){
        $pattern = $_POST['pattern'];
    }

    if(isset($_POST['name'])){
        $data = $_POST['name'];

        if(preg_match($pattern,$data)){
            echo "<h2 style='color: mediumblue'>$data pasuje do wzorca $pattern</h2>";
        }else{
            echo "<h2 style='color: firebrick'>Nie pasuje</h2>";
        }
    }
    ?>
    <pre>
    Instrukcje wyrażenia regularnego:
    Nie potrzeba slasha
    @początek ^początek napisu i koniec@ $koniec tekstu | Nie musi zawierać ^ $
    [0-9]grupy znaków np dowolna cyfra od 0 do 9 {X,Y} X- minimalna ilość Y - maksymalna ilość
    {} nawisy falbankowe modyfikator ile razy powtórzymy daną grupę cyfr
    [A-Z][a-z]{2,8} [A-Z][a-z]{2,8}
    Pierwsza litera z dużej następne z małej litery 2 do 8 znaków druga też z dużej następne z małej litery
    + minimum jeden raz
    [^] negacja - tylko w nawiasie kwadratowym

. 	Zastępuje dowolny znak
\s 	Spacja
\n 	Znak nowej linii
\d 	Cyfra
^ 	Początek linii lub zaprzeczenie
$ 	Koniec linii
| 	Alternatywa
{a,b} 	Ilość wystąpień danego wzorca – co najmniej a i co najwyżej b razy
{a,} 	Jak wyżej, bez limitu górnego
{,b} 	Jak wyżej, bez limitu dolnego
{a} 	Dokładnie a wystąpień
? 	Zero lub jedno wystąpienie; tak samo jak {0,1}
+ 	Jedno lub więcej wystąpień; tak samo jak {1,}
* 	Dowolna ilość wystąpień (również zero); podobnie jak {0,}
[] 	Zakres

</pre>
</form>
    <p class="interview">! Pytanie na rozmowie kwalifikacyjnej z PHP</p>
    <h2>Wyrażenia regularne</h2>
    <p>
        Wyrażenia regularne pełnią istotną rolę w PHP.
        Umożliwiają one opisywanie i przetwarzanie długich ciągów znaków.
        Dzieje się to na zasadzie porównania danego ciągu znaków z określonym wzorem, ułożonym przez programistę.
    </p>
    <br><br><br><br><br>
<a href="../chapter/basics.php" class="button">Powrót</a>
    <br><br>
</article>
</body>
</html>