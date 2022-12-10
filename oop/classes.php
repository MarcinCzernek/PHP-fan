<!DOCTYPE html>
<html lang="pl" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="author" content="PHPDevs">
    <meta name="description" content="Czym są zmienne i stałe oraz jak je tworzyć. Zasady nazewnictwa oraz zmienne predefiniowane.">
    <meta name="theme-color" content="#383838">
    <meta property="og:title" content="Zmienne i stałe - Podstawy języka | PHPDevs">
    <meta property="og:description" content="Czym są zmienne i stałe oraz jak je tworzyć. Zasady nazewnictwa oraz zmienne predefiniowane.">
    <meta property="og:url" content="https://www.phpdevs.pl/podstawy-jezyka/2-zmienne-i-stale">
    <meta property="og:image" content="https://www.phpdevs.pl/images/og.png">
    <meta property="og:type" content="article">
    <meta property="twitter:card" content="summary">
    <meta property="twitter:site" content="@phpdevspl">
    <link rel="stylesheet" href="../style.css"/>
    <title>Klasy- OOP</title>

</head>
<body>
<header>
    <h3 class="box">Klasy i ich instancje czyli obiekty</h3>
</header>
<article>
<p>Klasę tworzymy słowę kluczowym class</p>
<p>Kazda klasa posiada atrybuty czyli dane - swoje zmienne opisujące tworznone z klasy  obiekty. </p>
<code>class Fruit{
    public $name;
    public $color;

    }</code>
<p>Oraz swoje funkcje zwane metody które reprezentują funkcjonalnośći oraz zadania które obiekt moze wykonywać.</p>
    <p>$this specjalna zmienna przy pomocy której odwołuję się do zmiennych lub metod</p>
<code>class Fruit{
    public $name;
    public $color;

    public function details(){
    echo "my" . $this->name . "is" . $this->color;
    }

    }
</code>
<p>Stwórzmy więc obiekt klasy owoc. Będzie to owoc np. jabłko.</p>
    <code>$apple = new Fruit();</code>
<p>I drugi kiwi.<p>
    <code>$kiwi = new Fruit();</code>
<p>Aby ułatwić to zadanie w klasie stworzymy konstruktor który za pomocą parmetrów pomoże zdefiniować automatycznie po utworzeniu obiektu jego atrybuty</p>
<code>
    class Fruit {<br><br>
    public $name;<br><br>
    public $color;<br><br>

    public function __construct($name, $color){<br><br>
    $this->name = $name;<br><br>
    $this->color = $color;<br><br>
    }<br><br>

    }</code><br><br>
    <code>$apple = new Fruit("apple","yellow");</code><br><br>
<code>$kiwi = new Fruit("kiwi","green");</code>
<p>W PHP po konstruktorze jest też dekonstruktor, który w odróżnieniu od budowy obiektów, niszczy obiekt lub skrypt</p>
<code> class Fruit {
    public $name;
    public $color;

    public function __destruct(){
    echo "The fruit is {$this->name}.";
    }

    }
</code>

<p>Poniższy przykład zawiera funkcję __construct(), która jest automatycznie wywoływana
    podczas tworzenia obiektu z klasy, oraz funkcję __destruct(), która jest automatycznie wywoływana na końcu skryptu.</p>


    <p class="interview">! Pytanie na rozmowie kwalifikacyjnej z PHP</p>
    <h2>Ogólne założenia programowania obiektowego - klasy i obiekty</h2>
   <p>Programowanie proceduralne polega na pisaniu procedur lub funkcji, które wykonują operacje na danych, podczas gdy programowanie obiektowe polega na tworzeniu obiektów zawierających zarówno dane, jak i funkcje.
    Programowanie obiektowe opiera się na tworzeniu klas i obiektów zawierające dane jak i funkcje. Ma wiele zalet w porównaniu do programowania proceduralnego
    Jest szybsze i łatwiejsze do wykonania, zapewnia przejrzystą strukturę programów, pomaga utrzymać kod PHP DRY „Don't Repeat Yourself” i sprawia, że kod jest łatwiejszy w utrzymaniu, modyfikacji i debugowaniu
    Umożliwia również tworzenie pełnych aplikacji wielokrotnego użytku z mniejszą ilością kodu i krótszym czasem programowania.</p>

    <p class="interview">! Pytanie na rozmowie kwalifikacyjnej z PHP</p>

    <h2>Modyfikatory dostępu</h2>
    <p>Modyfikator public oznacza, że atrybut lub metoda jest widoczna zarówno ze środka klasy, klas dziedziczonych jak i z zewnątrz klasy.</p>
    <p> Modyfikator private oznacza, że atrybut lub metoda nie jest widoczna na zewnątrz klasy i nie może być dziedziczona.</p>
    <p>  Modyfikator protected oznacza, że atrybut lub metoda nie jest widoczna na zewnątrz klasy i może być dziedziczona. </p>
    <br><br><br><br><br>
    <a href="../chapter/oop.php" class="button">Powrót</a>
    <br><br>

</article>

</body>
</html>