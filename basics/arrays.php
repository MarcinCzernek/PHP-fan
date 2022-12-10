<!doctype html>
<html lang="pl">
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
<h2 class="box">Typy tablic w PHP</h2>
</header>
<article>
    <p>Tablice w PHP służą do przechowywania wielu danych w jednej zmiennej</p>
<h2>Tablice indeksowane</h2>
<p>Tablice z indeksem numerycznym.</p>
<p>Indeks może być przypisany automatycznie (indeks zawsze zaczyna się od 0), w ten sposób:</p>
<code>$colors = ("Blue", "Red", "White");</code>
<p>Aby przejść przez pętlę i wydrukować wszystkie wartości tablicy indeksowanej, możesz użyć pętli for, tak jak poniżej:</p>
<code>$colors = ("Blue", "Red", "White");
    $arrlength = count($colors);

    for($x = 0; $x < $arrlength; $x++) {
    echo $colors[$x];
    echo '<br>';
    }
</code>
<span class="header2"><h2>Tablice asocjacyjne</h2></span>
<p>Tablice asocjacyjne to tablice używające nazwanych kluczy, które przypisujesz do nich.</p>
<code>$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");</code>
<p>aby przejść przez pętlę i wydrukować wszystkie wartości tablicy asocjacyjnej, możesz użyć pętli foreach, takiej jak ta:</p>
<code>$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    }</code>
<h2>Tablice wielowymiarowe</h2>
<p>Ta specjalna tablica zawiera w sobie więcej tablic.</p>
    <p>PHP obsługuje wielowymiarowe tablice o głębokości dwóch, trzech, czterech, pięciu lub więcej poziomów. Jednak trudno jest</p>
    <p>zarządzać tablicami o wielkości większej niż trzy poziomy.
    Wymiar tablicy wskazuje liczbę indeksów potrzebnych do wybrania elementu.</p>
<code>$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
    );</code>
    <br><br><br><br><br>
    <a href="../chapter/basics.php" class="button">Powrót</a>
    <br><br>
</article>
</body>
</html>