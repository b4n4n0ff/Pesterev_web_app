<!DOCTYPE html>
<html lang="ru">
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1>Добро пожаловать!</h1>
                <p class="lead">Это сайт нкииты</p>
            </div>

            <div class="col-md-6">
                <h3>Обо мне</h3>
                <p>студент</p>
            </div>

        <div class="row mt-5">
            <div class="col-12">
            <h1>Привет, <?php echo $_COOKIE['username']; ?></h1>
            </div>
        </div>
    </div>
</body>
</html>

<?php
require_once('./db.php');
$link = mysqli_connect('db', 'root', 'Pesterev', 'baza');
?>
