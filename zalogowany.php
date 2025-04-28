<?php

session_start(); 
if (!isset($_SESSION['login'])) { 
    header("Location: index.php"); 
    exit(); 
}


$name = $_SESSION['name'];
$surename = $_SESSION['surename'];
$nickname = $_SESSION['nickname'];
$userID = $_SESSION['id_user'];
$userVotes =  $_SESSION['user_votes'];
// echo "Witaj, " . $name . " " . $surename;
// echo $userID;

?>

<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex, nofollow" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ZSPMusic</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="preconnect" href="https://rsms.me/">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <link rel="stylesheet" href="./css/logged.css">
  <link rel="apple-touch-icon" sizes="180x180" href="./img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon-16x16.png">
  <link rel="manifest" href="./img/site.webmanifest">
  <link rel="mask-icon" href="./img/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
</head>

<body>
  <div class="particles" id="particles-js"></div>
  <header class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="#aboutus">o projekcie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#proposition">propozycje</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link--logo"><img src="./img/Logo[bezBG].png" alt="" width="125"></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" target="_blank" rel="noopener" href="https://kolodev.pl/index.html">autor</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link nav-link--logged dropdown-toggle px-3" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <?php 
            echo $nickname;
            ?>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#addsong">Dodaj propozycję</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="logout.php">Wyloguj się</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container header__content mt-5" id="aboutus">
      <div class="header__content">
        <h1 class="header__title">zsp music</h1>
        <div class="header__hr"></div>
        <h6 class="header__signature"> zsp music - projekt od uczniów dla uczniów</h6>
        <p class="col-12 col-md-8 header__description">• Witaj na ZSPMusic - twoim nowym ulubionym miejscu do dzielenia
          się ulubionymi utworami! ZSPMusic to platforma muzyczna stworzona specjalnie dla Ciebie, abyś mógł/a cieszyć
          się swoimi ulubionymi piosenkami w trakcie długich przerw w radiowęźle.<br><br>
          • Co ZSPMusic ma do zaoferowania? Przede wszystkim, daje Ci możliwość dodania swojej ulubionej piosenki jako
          propozycji do puszczenia. Niezależnie od tego, czy to nowy hit czy klasyczny utwór, możesz podzielić się nim z
          innymi użytkownikami i sprawić, że zostanie ona uwzględniona w odtwarzanej muzyce.<br><br>
          • Ale to nie wszystko! ZSPMusic posiada również innowacyjny system głosowania, który pozwala użytkownikom
          decydować, która piosenka ma zostać pierwszą do odtworzenia. Dzięki temu każdy ma szansę wpłynąć na atmosferę
          radiowęzła i usłyszeć swoje ulubione utwory jako pierwsze.<br><br>
          • Dlaczego więc warto korzystać z ZSPMusic? Ponieważ dzięki niemu masz kontrolę nad tym, co słuchasz w trakcie
          długich przerw, uczyniając je bardziej przyjemnymi i zgodnymi z Twoimi gustami muzycznymi. Nie czekaj dłużej -
          dołącz do społeczności ZSPMusic i zacznij tworzyć unikalną playlistę dla radiowęzła już teraz!<br></p>
      </div>
    </div>


  </header>

  <main class="main">
    <div class="main__divider"></div>
    <div class="container">
      <h2 class="main__title">Dodaj lub wybierz ulubioną piosenkę</h2>
      <p class="main__description" id="addsong">Podaj link do piosenki (np. na youtube) i jej tytuł, a następnie kliknij
        <i>Dodaj</i>.</p>
      <form class="main__form" action="add_song.php" method="post">
        <input class="main__input" type="text" name="title" placeholder="Tytuł piosenki" required>
        <input class="main__input" type="text" name="link" placeholder="Link do piosenki na youtube" required>
        <input class="main__submit" type="submit" value="Dodaj">
      </form>
      <p class="main__list" id="proposition">Oto lista piosenek, na które możesz głosować za pomocą przycisków <span
          class="vote__btn vote__btn--plus">"+"</span> i <span class="vote__btn vote__btn--minus">"-"</span>.
        <br>&nbsp;&nbsp; • Im więcej plusów tym piosenka jest na wyższej pozycji na liście.
        <br>&nbsp;&nbsp; • Analogicznie - im więcej minusów tym piosenka jest niżej na liście niż inne piosenki.
      </p>
      <ol class="main__ol" id="votes">
        <h2 class="ol__title"> Wasze piosenki:</h2>
        <?php
        include "functions.php";
        $songs = get_songs();
        foreach ($songs as $song) {
          echo "<li>";
          $videoUrl = $song["link"]; 
          if(substr($videoUrl, 0, strlen("https://")) === "https://"){
            $html = file_get_contents($videoUrl);
            $titlePattern = '/<title>(.*?)<\/title>/';
            if (preg_match($titlePattern, $html, $matches)) {
                $title = $matches[1];
                echo $title;
            } else {
                echo "Nie udało się pobrać tytułu filmu.";
            };
          } else {
            echo $song["title"];
        }

          echo "<a class='vote_up' href='vote_up.php?id=" . $song["id"] . "&" . "userid=" . $userID ."'>+</a>";

          echo $song["votes"] . " głosów";
          
          echo "<a class='vote_down' href='vote_down.php?id=" . $song["id"] . "&" . "userid=" . $userID ."'>-</a>";
          echo "</li>";
        }
        ?>
      </ol>


    </div>
  </main>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="./js/particles.js"></script>
  <script src="./js/main.js"></script>
  <script src="https://skrypt-cookies.pl/id/0c82d88eda4335fc.js"></script>
</body>

</html>