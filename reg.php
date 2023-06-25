<?php
    // include "path.php";   
    include "app/controlles/user.php";
?>


<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Рейтинговая система</title>
</head>
<body>

<?php include "app/include/header.php"; ?>


<div class="container reg_form">
    <form class="row justify-content-center" method="post" action="reg.php">
        <h3 class="col-12">Форма регистрации</h3>
        <div class="mb-3 col-12 col-md-4 err">
            <p><?=$errMsg?></p>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="formGroupExampleInput" class="form-label">Ф И О</label>
            <input name="username" value="<?=$username?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="введите ваше имя...">
        </div>
        <div class="w-100"></div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
        <select name="MO" class="form-select" aria-label="Default select example">
          
                <option class="mb-3 col-12 col-md-4" selected>Выберите методобъединение</option>
                <?php foreach ($MO as $key => $mo): ?>
                    <option value="<?=$mo['id']; ?>"><?=$mo['name']; ?></option>
                            <?php endforeach; ?>
                </select>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1" placeholder="введите ваш пароль...">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
            <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2" placeholder="повторите ваш пароль...">
        </div>
        <div class="w-100"></div>

        <div class="mb-3 col-12 col-md-4">
            <button name="button-reg" type="submit" class="btn btn-secondary">Регистрация</button>
            <a href="index.php">Войти</a>
        </div>
    </form>

</div>>


</body>
</html>