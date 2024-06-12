<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontello.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <title>Податки +</title>
    <link rel="shortcut icon" href="../pic/favicon-32x32.png" type="image/x-icon">
</head>

<body>
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.html">
                    <img src="../pic/logo.png" class="img-fluid" alt="Податки + ЛОГО" width="200" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto align-items-center">
                        <a class="nav-link nav-color" aria-current="#about" href="../index.html">Про ПОДАТОК+</a>
                        <a class="nav-link nav-color" aria-current="#news" href="#news">Новини</a>
                        <a class="nav-link nav-color" aria-current="#kor" href="#kor">Корисне</a>
                        <a class="me-5 nav-link nav-color" aria-current="#logon" href="#logon">Зареєструватись</a>
                        <a class="me-2 btn btn-secondary btn-lg text-uppercase disabled" >УВІЙТИ</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <br><br>
        <div class="row">
            <div class="col">
            </div>
            <div class="col text-center border border-primary">
                <br><br>
                <form action="pass.php" method="post">
                    <pre>Ім'я користувача:   <input type="text" name="user"></pre>
                    <pre>Пароль користувача: <input type="password" name="pass"></pre>
                    <br>
                    <input class="btn btn-secondary btn-sm text-uppercase" type="submit" name="enter_but"
                        value="Увійти">
                    <a href="../index.html" class="btn btn-secondary btn-sm text-uppercase">Назад</a>
                </form>
                <br><br>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
    </div>
    <script>

    </script>
</body>

</html>
<?php
if (isset($_POST["enter_but"])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    if ($username == "Defender" and $password == "335255") {
        echo "<script>alert('Ви зареєстрований користувач')</script>";
    } elseif ($username == "" and $password == "") {
        echo "<script>alert('Ви незареєстрований користувач')</script>";
    }
}
?>