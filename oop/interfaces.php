<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
<header>
    <h2 class="box">Interfejsy, typy final i klasy abstrakcyjne</h2>
</header>
<article>
    <h2>Interfejsy</h2>
    <p>Interfejsy (ang. interface) to zestaw pól i metod które implementująca klasa może zdefiniować na swój własny sposób</p>
    <code>
        interface Database{
        function listOrders();
        function addOrder();
        function removeOrder();
        }
    </code>
    <p>Klasa aby użyć metody lub pola z interfejsu potrzebuje po nazwie klasy implements i nazwę interfejsu po czym zdefiniować w swoim ciele jego zawartosc</p>
    <code>
        class MySQLDatabase implements Database{
        function listOrders(){
        //listing orders
        }
        function addOrder(){
        }
        function removeOrder(){
        }
     }
        class OracleDatabase implements Database{
        function listOrders(){
        //listing orders
        }
        function addOrder(){
        }
        function removeOrder(){
        }
        }
    </code>
        <p>Kod implementacji funkcji w klasach MySQL i Oracle może być inny, jest to kluczowa rzecz do zrozumienia w interfejsach.</p>
    <h2>Abstract</h2>
    <p>Możemy zdefiniować klasę jako abstrakcyjna wtedy będzie ona służyć do dziedziczenia. Nie możliwe będzie z niej utworzenie obiektu</p>
    <code>
        abstract class Person
        {
        // ...
        }

        $person = new Person(); //Wyświetli się błąd: Fatal error: Class Child may not inherit from final class (Person) in ...
    </code>
    <p>Możliwe jest również zadeklarowanie metody jako abstrakcyjnej</p>
    <code>
        abstract class Person
        {
        abstract public function getName(): string;
        }

        class Child extends Person
        {
        public function getName(): string
        {
        return 'name';
        }
        }

        echo (new Child())->getName(); // result: name
    </code>
    <p>Jaki to ma sens? W tym małym przykładzie niezbyt wielki, ale ogólnie rzecz biorąc, przygotowujemy pewny „szkielet” czy wzór. Dzięki temu wiemy odgórnie co uruchomić, jaki to da efekt, ale konkretne implementacje mogą być różne w danych klasach. Tu też przydaje się fakt, że możemy wstrzyknąć daną instancję przez argument metody, ustalając jako jego typ tylko klasę bazową.</p>
    <h2>Typ final</h2>
    <p>Deklarując klasę jako finalną nie można po niej dziedziczyć.</p>
    <p>Poniższa operacja zakończy się błędem</p>
    <code>final class Person
        {
        // ...
        }

        class Child extends Person
        {
        // ...
        }</code>

    <br>
    <p class="interview">! Pytanie na rozmowie kwalifikacyjnej z PHP</p>
    <h2>Jedno z ulubionych pytań na rozmowie rekrutacyjnej z PHP dotyczy różnic między interfejsem a klasą abstrakcyjną.</h2>

    <p>Obie konstrukcje służą do wymuszania konkretnych pól i metod w klasach z nich korzystających. Jakie natomiast są między nimi różnice?</p>

    <p>Najważniejszą jest: klasa może dziedziczyć tylko po jednej klasie abstrakcyjnej, podczas gdy może implementować wiele interfejsów.
        I jeszcze: klasa abstrakcyjna może definiować ciało metody i wartości domyślne dla pól, a interfejs jedynie deklaruje pola i metody (podajesz tylko nazwy metod i pól oraz listę parametrów).</p>
    </div>
    <br><br><br><br><br>
    <a href="../chapter/oop.php" class="button">Powrót</a>
    <br><br>
</article>
</body>
</html>