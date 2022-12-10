<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css" />
    <title>Dziedziczenie w PHP</title>
</head>
<body>
<header>
    <h2 class="box">Dziedziczenie w PHP</h2>
</header>
<article>
<p>W poniższym przykładzie są dwie klasy. Druga klasa Lizard dziedziczy zmienne i metody po klasie Lizard. Wskazuje to wyraz kluczowy extends po którym jest klasa dziedziczona.</p>
<code>
    class Lizard {
      public $name = "Zwinka";
      public $

    public function escape(){
    echo "tup tup tup";
    }

    }

    class Dragon extends Lizard{

    }
</code>
    <p>obiekty klasy Dragon mogą dostosować zmienne i funkcje klasy po której dziedziczą i zmieniać na inne.</p>
    <code>
        class Lizard {
        public $name = "Zwinka";

        public function escape(){
        echo "tup tup tup";
        }

        }

        class Dragon extends Lizard{
        public $name = "Bazyl";

         public function escape(){
           return "bam bam bam";
        }
        }
    </code>
<p>Ten zabieg nazywa się przeciążaniem metody. Metoda escape z klasy dziedziczonej Lizard w klasie Dragon ma inne ciało i zwraca ciąg znaków: "bam bam bam" a nie "tup tup tup".</p>
<h2>Modyfikator dostepu protected i jego rola w dziedziczeniu</h2>
<p> Zmienne i funkcje o poziomie dostępu protected mogą byc tylko dostępne przez przez klasę dziedziczoną.</p>
    <div style="white-space: pre">
    <code> class Lizard {
    public $name = "Zwinka";

    protected function escape(){
    echo "tup tup tup";
    }

    }

    class Dragon extends Lizard{
    public $name = "Bazyl";

    public function printEscape(){
    return escape();
    }
    }</code>
    </div>
    <p class="interview">! Pytanie na rozmowie kwalifikacyjnej z PHP</p>
    <h2>Dziedziczenie</h2>
    <p>Dziedziczenie w programowaniu obiektowym jest gdy klasa wywodzi się z innej klasy.
       Klasa potomna odziedziczy wszystkie publiczne i chronione właściwości i metody z klasy nadrzędnej.
       Ponadto może mieć własne właściwości i metody.
       Dziedziczoną klasę definiuje się za pomocą słowa kluczowego extends.</p>
    <br><br><br><br><br>
    <a href="../chapter/oop.php" class="button">Powrót</a>
    <br><br>
</article>

</body>
</html>
