<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Nauka języka PHP</title>
    <link rel="stylesheet" href="start_style.css" type="text/css" />

</head>
<body>



<header>

    <?php
    session_start();

   if(isset($_SESSION['id']) && isset($_SESSION['name'])) {
       echo "<h1 class='logo'>Witaj użytkowniku o nazwie ";
       echo $_SESSION['name'] . '</h1><br>';


    }else{
    echo "<h1 class='logo'>Nie zalogowano</h1><br>";

    }




?>




    <?php
    echo "<nav>";
        if(!isset($_SESSION['id'])) {
        echo '<a href="login.php">Zaloguj się</a><br><a href="register.php">Zarejestruj się</a>';
        }
        if(isset($_SESSION['id'])) {
        echo '<a href="logout.php">Wyloguj się</a><br><a href="edit.php">Edytuj nazwę i hasło</a><br><a href="content.php">Zadania</a>';
        }
        echo "</nav>";
     ?>

</header>
<section class="home">
    <!-- <img src="bg.png" alt=""> -->
    <img src="phplogo.png" class="pyramids" alt="">
    <img src="elephant.png" class="palace" alt="">
    <div class="info">
        <h2 class="title">PHP</h2>
        <p class="paragraph">Nie wiesz jak zacząć swoją przygodę z językiem PHP?
            Ta strona przeprowadzi Cię przez podstawy oraz bardziej zaawansowane aspekty tego języka.</p>
        <a href="menu.html" class="btn">Rozpocznij naukę</a>
    </div>
</section>
<section class="content">
    <h2 class="box">Język PHP</h2>
    <p>Ten serwerowy język skryptowy jest powszechnie używany w back-endzie do zadań takich jak zarządzanie danymi na serwerach.</p><br>
    <p>PHP został stworzony przez Rasmusa Lerdorfa w 1994 roku i pierwotnie był nazwany “Personal Strona Główna Page”. Teraz skrót ten oznacza “Hypertext Preprocessor”.</p><br>
    <p>PHP może być osadzony w kodzie HTML i został stworzony do zarządzania osobistą stroną internetową Lerdorfa. PHP nigdy nie był tak naprawdę zaprojektowany, ani nawet nie miał być językiem programowania. Zamiast tego, rozwijał się organicznie. Doprowadziło to do wielu niespójności w tym języku.</p><br>
    <p>Od tego czasu społeczność podjęła wiele wysiłków, aby uczynić język PHP czystszym i bardziej spójnym – i odniosła sukces.</p><br>
    <p>Oprócz dużej społeczności i wielu możliwości pracy, PHP jest łatwy do nauczenia się i nie wymaga od użytkownika podstaw. Przy tak wielu dostępnych szablonach, wtyczkach i stronach internetowych dla WordPressa, można po prostu pobrać jakiś istniejący wcześniej kod i edytować go, aby stworzyć coś nowego.</p><br>
    <p>PHP jest również niezwykle szybki w konfiguracji na naszym  komputerze i nie zajmie wiele dni, jak niektóre inne języki programowania. Jakby to nie było wystarczająco proste, większość witryn hostingowych ma już zainstalowane PHP na serwerze, co sprawia, że praca użytkownika jest bardzo prosta. Jeśli kiedykolwiek napotkamy problemy w przyszłości, w Internecie jest duża, aktywna społeczność i mnóstwo dokumentacji do pomocy.</p>
</section>
<footer><p class="box2">Strona przygotowana w HTML, CSS i JS </p></footer>
<script type="text/javascript">
    const elephants = document.querySelector(".pyramids");
    const phplogo = document.querySelector(".palace");
    const logo = document.querySelector(".logo");
    const nav = document.querySelector("nav");
    const info = document.querySelector(".info");

    //odkrycie elementów po otwarciu strony
    window.addEventListener("load", () => {
        elephants.style.transform = "translateX(0)";
        phplogo.style.transform = "translateX(0)";
        logo.style.transform = "translateY(0)";
        nav.style.transform = "translateY(0)";

        setTimeout(() => {
            info.style.transform = "translateY(0)";
            info.style.opacity = "1";
        }, 500);
    });


    //skrolowanie efektów na elementach strony
    window.addEventListener("scroll", () => {
        const scrollVal = window.scrollY;

        elephants.style.left = scrollVal * -0.25 + "px";
        phplogo.style.left = scrollVal * 0.25 + "px";
        info.style.marginTop = scrollVal * 1.1 + "px";

        elephants.style.transition = "0s";
        phplogo.style.transition = "0s";
        info.style.transition = "0s";
    });

    //pokaż i ukryj info menu po obracaniu
    window.onscroll = function(){
        if(document.body.scrollTop > 500 || document.documentElement.scrollTop > 500){
            info.style.opacity = "0";
            info.style.transition = "0.6s";
        }
        else{
            info.style.opacity = "1";
            info.style.transition = "0.6s";
        }
    }
</script>


</body>
</html>
