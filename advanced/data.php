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
    <h2 class="box">Data i czas</h2>
</header>
<article>
    <p>W PHP jest funkcja date pozwalająca uzyskać czas i datę teraźniejszą i nie tylko.</p>
    <p>Tworząc strony jest to przydatne choćby przy dacie dodanych postów na forum,sprawdzenia ostatniego logowania</p>
    <p>Pobranie tych danych wykonujemy za pomocą funkcji date().</p>
    <code>

        $data=date("Y-m-d");
        $czas=date("H:i");

        echo "Stronę wyświetlono dnia $data o godzinie $czas";

    </code>
    <p>Wynik powyższego kodu:</p>
    <?php
    $data=date("Y-m-d");
    $czas=date("H:i");

    echo "Stronę wyświetlono dnia $data o godzinie $czas";
    ?>
    <p>Funkcja date przekształca otrzymane argumenty na ciąg znaków. Wszystko co nie jest formatem daty (u nas “-” oraz “:”) pozostaje niezmienione. W naszym przykładzie Y oznacza rok w formacie czterocyfrowym, m – miesiąc dwucyfrowy, d – dzień miesiąca, również dwucyfrowy. H oznacza godzinę, a i minutę.</p>
    <code>

        $data=date("Y-m-d, H:i", mktime (0,0,0,10,15,1985));

        echo $data;

    </code>
    <p>Wynik powyższego kodu:</p>
    <?php

    $data=date("Y-m-d, H:i", mktime (0,0,0,10,15,1985));

    echo $data;
    ?>
    <p></p>
    <br><br><br><br><br>
    <a href="../chapter/advanced.php" class="button">Powrót</a>
    <br><br>
</article>
</body>
</html>