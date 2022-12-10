
<?php
session_start();
if(isset($_SESSION['id'])) {

     echo 'Zalogowany jako ' . $_SESSION['name'] . '</h1><br>';
}else{
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lorem ipsum</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="grid-container">
    <a href="#">Podstawowe</a>
    <a href="#">Zaawansowane</a>
</div>
<article>
<br>
    <p>Liczba Armstronga</p>
    <p>
        Napisz program PHP do sprawdzania numeru armstrong.
        Wejście: 371
        Wyjście: armstrong
        Wejście: 342
        Wyjście: nie armstrong
    </p>
    <button type="button" class="collapsible">Rozwiązanie</button>
    <div class="content">
        <code> function armstrong($number){
            $arrayNumber = array_map("intval",str_split($number));
            foreach ($arrayNumber as $item ){
            $ech = 0;
            $e = pow($item,3);
            $ech+=$e;
            echo $ech . "<br>";
            }
            if($ech == $number){
            return "Armstrong number";
            }else{
            return "Not Armstrong number";
            }
            }

            armstrong(153); </code>
    </div>
    </br>
    <p>Seria Fibonacci</p>
    <p>
        Napisz program PHP do drukowania serii Fibonacciego bez używania rekurencji i używania rekurencji.
        Wejście: 10
        Wyjście: 0 1 1 2 3 5 8 13 21 34
        Zasada:
        0, 1+1 = 2 | 0, 1, 1 + 2 = 3 | 0, 1, 1, 2 + 3 = 5 |
    </p>
    <button type="button" class="collapsible">Rozwiązanie</button>
    <div class="content">
        <code>
            // Wersja rekurencyjna //
            function fibonacci ($number){
            if($number <= 1){
            return $number;
            }else{
            return fibonacci($number - 1) + fibonacci($number - 2);
            }

            }

            echo fibonacci(14);

            // Wersja bez rekurencji
        </code>
    </div>
    </br>
    <p>Numer palindromu</p>
    <p>
        Napisz program PHP do sprawdzania liczby palindromu.
        Wejście: 121
        Dane wyjściowe: nie numer palindromu
        Wejście: 113
        Dane wyjściowe: numer palindromu
    </p>
    <button type="button" class="collapsible">Rozwiązanie</button>
    <div class="content">
        <code>function palindrome($number){
            $arrayNumber = array_map("intval",str_split($number));
            var_dump($arrayNumber);
            $revNumArr = array_reverse($arrayNumber);

            $imArray = implode("",$revNumArr);
            var_dump($imArray);

            if($number == $imArray){
            return "palindrome number";
            }else{
            return "not palindrome number";
            }
            }

            palindrome(2002);</code>
    </div>
    </br>
</article>
<a href="index.php">Powrót do menu</a><br>
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
</script>
</body>
</html>