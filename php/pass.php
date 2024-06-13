<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontello.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <title>Податки +</title>
    <link rel="shortcut icon" href="../pic/favicon-32x32.png" type="image/x-icon">
    <script src="../js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.html">
                    <img src="../pic/logo.png" class="img-fluid" alt="Податки + ЛОГО" width="200" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto align-items-center">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link nav-color" aria-current="#about" href="#about">Про ПОДАТОК+</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-color" aria-current="#news" href="#news">Новини</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-color" aria-current="#kor" href="#kor">Корисне</a>
                            </li>
                            <li class="nav-item">
                                <a class="me-5 nav-link nav-color" aria-current="#logon"
                                    href="#logon">Зареєструватись</a>
                            </li>
                            <li class="nav-item">
                                <a href="php/pass.php"
                                    class="me-2 btn btn-secondary btn-lg text-uppercase disabled">УВІЙТИ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container" style="background-color: lightblue; height: calc(100vh - 106px);">
        <hr>
        <h3 class="text-center">Введіть логін та пароль для доступу до Ваших податків.</h3>
        <h3 class="text-center">Якщо в Вас відсутні логін та пароль, натисність "Зареєструватись".</h3>
        <hr>
        <br><br>
        <div class="row">
            <div class="col"></div>
            <div class="col text-center border border-primary back-pass">
                <br><br>
                <form action="login.php" method="post">
                    <pre>Ім'я користувача:   <input type="text" name="user"></pre>
                    <pre>Пароль користувача: <input type="password" name="pass"></pre>
                    <input type="checkbox" name="s_pass" value="0" id="s_pass" class="show_pass">
                    <label for="s_pass" class="show_pass">Показати пароль</label>
                    <br>                    
                    <a href="#" class="btn btn-secondary btn-sm text-uppercase">Зареєструватись</a>
                    <input class="btn btn-secondary btn-sm text-uppercase" type="submit" name="enter_but"
                        value="Увійти">
                    <a href="../index.html" class="btn btn-secondary btn-sm text-uppercase">Назад</a>
                </form>
                <br><br>
            </div>
            <div class="col"></div>
        </div>
        <br><br>
        <hr>
        <h4 class="text-center">Нікому не повідомляйте свої облікові дані.</h4>
        <hr>
    </div>

</body>

</html>
