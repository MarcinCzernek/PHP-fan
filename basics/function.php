<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css" type="text/css" />

    <title>Funkcje - PHP</title>
</head>
<body>
<header>
<h2 class="box">Funkcje</h2>
</header>
<article>
<p>Funkcje są bardzo pomocne ponieważ organizują nasz kod i rozdzielają go na <span style="color: darkseagreen">zadania</span>.
    A także redukują długie bloki kodu w <span style="color: darkseagreen">pojedynczą komendę </span> unikając powtarzania.
</p>
    <p>Zdefiniowana funkcja wygląda tak</p>
    <code>function about_me($name,$profession,$pet){
        echo "Hi, my name is" . $name;
        echo "I am a" . $profession;
        echo "and I have a" . $pet;
        }</code>
    <p>Wywołanie funkcji</p>
    <code>about_me("Marcin","programmer","elePHPant");</code>
    <p> Słowo rozpoczynające funkcję w PHP to 'function', po którym następnie jest nazwa funkcji, nawias na jej parametry. </p>
    <p>Trzeba pamiętać że zmienne utworzone wewnątrz funkcji nie istnieją poza nią</p>
    <p>Return statement</p>
    <code>function multiply($a, $b){
        return $a * $b;
        }</code>
    <p>Zasięg zmiennych w funkcji</p>
    <code>function multiply($a, $b){
        return $a * $b;
        }
    if ($a < $b){
        echo "$a jest większe od $b"}
    </code>
    <p>Zmienna $a nie jest zdefiniowana</p>
    <br><br><br><br><br>
    <a href="../chapter/basics.php" class="button">Powrót</a>
    <br><br>
    </article>
</body>
</html>