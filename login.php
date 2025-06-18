<!DOCTYPE html>
<html lang="ru">
<body> 
    <div class="container">
        <div class="row">
            <div class="col-12 index">
                <h1>Авторизация</h1>
            </div>
        </div>

        <div class="row"> 
            <div class="col-12 index">
                <form method='POST' action='./login.php'>
                    <div class="row form_reg"><input class="form" type="text" name="username" placeholder="Login"></div>
                    <div class="row form_reg"><input class="form" type="password" name="password" placeholder="Password"></div>
                    <button type="submit" class="btn_reg" name="submit">Продолжить</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
require_once('./db.php');
$link = mysqli_connect('db', 'root', 'Pesterev', 'baza');
if (isset($_COOKIE['User'])) {
    header("Location: profile.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!$username || !$password) die ('Пожалуйста введите все значения!');

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) == 1) {
        setcookie("username", $username, time()+7200);
        header('Location: profile.php');
      } else {
        echo "Неверное имя или пароль";
      }
  }
?>
