

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
<h2 class="box">Pętle</h2>
</header>
<article>
<h2>Pętla for</h2>
<p>Jest instrukcją kontroli. Używana do:</p>
<p>iteracji czyli wykonywaniu tych samych operacji na róznych elementach. Jeden element na raz. </p>
<p>powtarzaniu</p>
<p>Przykład:</p>
<code>$lista = ["E","A","D","G","B","E"];</code>
<p>Bez pętli for te struny do gitary trzeba by było wyświetlać w ten sposób</p>
<code>echo "E";
echo "A";
echo "D";
echo "G";
echo "B";
echo "E";</code>
<p>Za pomocą pętli for</p>
<code>for ($x = 0; count($lista); $x++) {
    echo "$x";
    } </code>
<p>$x jest zmienną iterującą</p>
<p>count to długość listy</p>
<p>Pętla for jest najczęściej spotykana. Sa też inne typy pętli w PHP:</p>
<h2>Pętla while</h2>
    <p>Pętle while są przeznaczone do powtarzania kodu dopóty, dopóki dany
        warunek jest spełniony. W aplikacji do obsługi klientów może znajdować
        się zmienna $got_customers, która informuje, czy istnieją użytkownicy
        oczekujący na pomoc. Jeśli wartość tej zmiennej to true, wiadomo,
        że należy obsłużyć następnych klientów. Można wtedy wywołać funkcję
        next_customer(), aby przejść do następnego użytkownika i udzielić
        mu pomocy. Można utworzyć to rozwiązanie za pomocą pętli while</p>
    <code>while($row = mysqli_fetch_array($result)) {
        echo $row[‘first_name’] . ‘ ‘ . $row[‘last_name’] .
        ‘ : ‘ . $row[‘email’] . ‘<br />’;</code>
<h2>Pętla do while</h2>
    <p>Pętle do-while są bardzo podobne do pętli while, z tą różnicą, że wyrażenie prawdy jest sprawdzane na końcu każdej iteracji, a nie na początku.</p>
       <p> Główna różnica w stosunku do zwykłych pętli while polega na tym, że pierwsza iteracja pętli do-while jest gwarantowana (wyrażenie prawdy jest sprawdzane tylko na końcu iteracji),</p>
    <p>  podczas gdy nie musi ona koniecznie działać ze zwykłą pętlą while (tzw. wyrażenie prawdy jest sprawdzane na początku każdej iteracji, jeśli od samego początku ma wartość fałsz, wykonywanie pętli zakończy się natychmiast).

    </p>
    <code>
        $i = 0;
        do {
            echo $i;
        } while ($i > 0);
    </code>
<h2>Pętla foreach</h2>
    <p>To specjalna pętla do łatwej iteracji po elementach tablicy.</p>
    <code>foreach ($customers as $customer) {
        echo $customer;
        };</code>
    <br><br><br><br><br>
    <a href="../chapter/basics.php" class="button">Powrót</a>
    <br><br>
    </article>
</body>
</html>