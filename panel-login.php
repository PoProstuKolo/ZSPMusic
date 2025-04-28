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
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <div class="particles" id="particles-js"></div>
    <div class="login">
        <div class="login__box">
            <h1 class="login__title">Zaloguj się!</h1>
            <div class="login__btns ">
                <a class="btn btn-lg btn-primary btn__login btn__login-login">Zaloguj się</a>
                <a href="panel-signup.php" class="btn btn-lg btn-outline-primary btn__login btn__login-signup">Zarejestruj się</a>
            </div>
            <div class="login__hr"></div>
            <form action="login.php" method="POST" class="login__form">
                <input name="login" type="text" placeholder="Login" required>
                <input name="password" type="password" placeholder="Hasło" required>

                    
                <button type="submit" class="login__form--submit">Zaloguj się</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="./js/particles.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>