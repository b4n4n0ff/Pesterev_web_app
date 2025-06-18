<!DOCTYPE html>
<html lang="ru">

<body> 
    <div class="container">
        <div class="row">
            <div class="col-12 index">
                <h1>Регистрация</h1>
            </div>
        </div>

         
        <div class="row"> 
            <div class="col-12 index">
                <form method='POST' action='./registration.php'>
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
if (isset($_COOKIE['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!$username || !$password) die ('Пожалуйста введите все значения!');

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if(!mysqli_query($link, $sql)) {
        echo "Не удалось добавить пользователя";
      }
  }
?>
