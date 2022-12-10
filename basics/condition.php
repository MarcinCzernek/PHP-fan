<link rel="stylesheet" href="../style.css" type="text/css" />
<header
<h2 class="box">Instrukcje warunkowe i switch</h2>
</header>
<article>
    <h2>Instrukcja if</h2>
    <p>Wykonuje kod, jeśli jeden warunek jest spełniony.</p>
    <code>session_start();
        if(isset($_SESSION['id'])) {

        echo 'Zalogowany jako ' . $_SESSION['name'] . '</h1><br>';
        }else{
        header('Location: index.php');
        }</code>
    <h2>Instrukcja if...else</h2>
    <p>Wykonuje kod, jeśli warunek jest spełniony, a inny kod, jeśli warunek jest false.</p>
    <code>
        session_start();
        if(isset($_SESSION['id'])) {

        echo 'Zalogowany jako ' . $_SESSION['name'] . '</h1><br>';
        }else{
        header('Location: index.php');
        }
    </code>
    <h2>if...elseif...else instrukcja</h2>
    <p>Wykonuje różne kody dla więcej niż dwóch warunków.</p>
    <code>
        session_start();
        if(isset($_SESSION['id'])) {

        echo 'Zalogowany jako ' . $_SESSION['name'] . '</h1><br>';
        }elseif (asd){
        echo "sad";
        }
        else{
        header('Location: index.php');
        }
    </code>
    <h2>Instrukcja switch</h2>
    <p>Wybiera jeden z wielu bloków kodu do wykonania.</p>
    <code>
        $favcolor = "blue";

        switch ($favcolor) {
        case "red":
        echo "Your favorite color is red!";
        break;
        case "blue":
        echo "Your favorite color is blue!";
        break;
        case "white":
        echo "Your favorite color is white!";
        break;
        default:
        echo "Your favorite color is neither red, blue, nor white!";
        }
    </code>
    <p>Wynik powyższego kodu to "Your favorite color is blue!"</p>
    <h2>Operator trenarny</h2>
    <p>Jest to skrócona wersja instrukcji if oraz else przy pomocy operatora '?'. Za jej pomocą tworzymy krótkie instrukcje.</p>
    <p>W poniższym przykładzie pobierana jest wartość $_GET['user'] i zwracana 'not passed' jeśli nazwa użytkownika nie zostanie przekazana</p>
    <code>
        $username = isset($_GET['username']) ? $_GET['username'] : 'not passed';
        print($username);
    </code>

    <p></p>
<br><br><br><br><br>
    <a href="../chapter/basics.php" class="button">Powrót</a>
    <br><br>
</article>