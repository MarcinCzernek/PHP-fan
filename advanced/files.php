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
    <h2 class="box">Działania na plikach</h2>
</header>
<article>
    <p>PHP ma kilka funkcji do tworzenia, czytania, wysyłania i edytowania plików.</p>
    <p><span style="color: orange">Trzeba być bardzo ostrożny przy operowaniu na plikach. Nie uważając można wyrządzić wiele szkód. Najczęstsze błędy to edytowanie niewłaściwego pliku
            zapełnianie dysku twardego garbage danymi i przypadkowe usuwanie plików.</span></p>
    <h2>Odczyt pliku</h2>
    <p>Funkcja PHP readfile() odczytuje plik i zapisuje w buforze wyjściowym.</p>
    <p>Przypuscmy że mamy plik txt webLangauges.txt z zawartością:</p>
    <p>PHP - Hypertext preprocessor</p>
    <p>HTML - HyperText Markup Langauge</p>
    <p>CSS - Cascading Style Sheets</p>
    <p>JS - Java Script</p>
    <code>readfile("webLangauges.txt")</code>
    <p>W miejscu gdzie zostanie wywołana ta funkcja zostanie wyświetlona zawartości tego pliku</p>
    <p>Funkcja ta jest przydatna do otwarcia pliku i odczytu jego zawartości.</p>
    <h2>Otwieranie pliku</h2>
    <p>Lepszą funkcją do otwierania plików jest fopen() który w parametrach przyjmuję nazwę otwieranego pliku i trybu w jakim będzie on otwarty</p>
    <code>$myFile = fopen("webLangauges.txt", "r") or die ("Nie można otworzyć pliku")</code>
    <p>Plik można otworzyć w jednym z następujących trybów:</p>
    <table>
        <tr>
            <th> <span style="color: aqua">r</span> Otwórz plik tylko do odczytu. Wskaźnik pliku rozpoczyna się na początku pliku</th>
            <th> <span style="color: aqua">w</span> Otwórz plik tylko do zapisu. Usuwa zawartość pliku lub tworzy nowy plik, jeśli nie istnieje. Wskaźnik pliku rozpoczyna się na początku pliku</th>
            <th> <span style="color: aqua">a</span> Otwórz plik tylko do zapisu. Istniejące dane w pliku zostają zachowane. Wskaźnik pliku zaczyna się na końcu pliku. Tworzy nowy plik, jeśli plik nie istnieje</th>
            <th> <span style="color: aqua">x</span> Tworzy nowy plik tylko do zapisu. Zwraca FAŁSZ i błąd, jeśli plik już istnieje</th>
            <th> <span style="color: aqua">r+</span> Otwórz plik do odczytu/zapisu. Wskaźnik pliku rozpoczyna się na początku pliku</th>
            <th> <span style="color: aqua">w+</span> Otwórz plik do odczytu/zapisu. Usuwa zawartość pliku lub tworzy nowy plik, jeśli nie istnieje. Wskaźnik pliku rozpoczyna się na początku pliku</th>
            <th> <span style="color: aqua">a+</span> Otwórz plik do odczytu/zapisu. Istniejące dane w pliku zostają zachowane. Wskaźnik pliku zaczyna się na końcu pliku. Tworzy nowy plik, jeśli plik nie istnieje</th>
            <th> <span style="color: aqua">x+</span> Tworzy nowy plik do odczytu/zapisu. Zwraca FAŁSZ i błąd, jeśli plik już istnieje</th>
        </tr>
    </table>
        <br>
        <p>Funkcja fread() czyta z otwartego pliku.

            Pierwszy parametr fread() zawiera nazwę pliku do odczytania, a drugi parametr określa maksymalną liczbę bajtów do odczytania.

            Poniższy kod PHP wczytuje plik „webLangauges.txt” do końca:</p>
        <code>fread($myfile,filesize("webdictionary.txt"));</code>
    <h2>Zamykanie pliku</h2>
    <p>
        Funkcja fclose() służy do zamykania otwartego pliku.
        Dobrą praktyką programistyczną jest zamykanie wszystkich plików po ich zakończeniu. Nie chcesz, aby otwarty plik biegał po twoim serwerze, zajmując zasoby!
        fclose() wymaga nazwy pliku (lub zmiennej przechowującej nazwę pliku), który chcemy zamknąć:</p>
    <code>

        $myfile = fopen("webLangauges.txt", "r");
        fclose($myfile)

    </code>

    <br><br><br><br><br>
    <a href="../chapter/advanced.php" class="button">Powrót</a>
    <br><br>
</article>
</body>
</html>