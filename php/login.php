<?php 
if (!empty($_GET)) {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    if ($username == "Defender" and $password == "335255") {
        echo "<script>alert('Ви зареєстрований користувач')</script>";
    } else {
        echo "<script>alert('Ви незареєстрований користувач')</script>";
    }
}
echo '$_POST["s_pass"]';