<?php session_start();
    include "../app/controlles/personDat.php";
    $persons = selectAll('person1', ['id_user' => $_SESSION['id']]);
    $person = selectOne('person1', ['id' => $_SESSION['username']]);
?> 


<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="../assets/css/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../assets/css/posts_style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Рейтинговая система</title>
    <!-- <style>
        @media print{
            body{
                visibility: hidden;
            }
        }
    </style> -->
</head>
<body>

<!--HEADER-->
<?php include("../app/include/header-posts.php"); ?>

<!-- блок main-->
<div class="container">
    <div class="content row">
        <!-- Main Content -->
        <div class="main-content col-md-12 col-12">
        <!-- <h2><?php echo $_SESSION['username']; ?></h2> -->
        <div class="mb-3 col-12 col-md-4 err">
            <p><?=$errMsg?></p>
        </div>
            <div class="posts col-12">
                <div class="button row">
                    <a href="index-user.php" class="col-2 btn btn-success">Перейти <br>к достижениям</a>
                    <span class="col-1"></span>
                    <a href="create-person.php?id=<?= $person['id_user'] ?>" class="col-2 btn btn-warning">Сохранить<br>перс.данные</a>
                    <span class="col-1"></span>
                    <a href="red-person.php?id=<?= $person['id_user'] ?>" class="col-2 btn btn-warning">Редактировать<br>данные</a>
                </div>
 
                <div class="row post col-12">
                    <h3>Персональные данные</h3>
                    <div class="id col-2">№</div>
                    <div class="col-5">Название</div>
                    <div class="col-5">Содержание</div>
                </div>
               
                <?php foreach ($persons as $key => $person): ?>
                <div class="row post col-12">
                    <div class="id col-2"><?=$key + 1; ?></div>
                    <div class="title col-5">Дата рождения</div>
                    <div class="title col-5"><?=$person['year_birth']; ?></div>
                </div>    
                <div class="row post col-12">
                    <div class="id col-2"><?=$key + 2; ?></div>
                    <div class="title col-5">Образование</div>
                    <div class="title col-5"><?=$person['edu']; ?></div>
                </div>
                <div class="row post col-12">
                    <div class="id col-2"><?=$key + 3; ?></div>
                    <div class="title col-5">Учебное заведение, год окончания</div>
                    <div class="title col-5"><?=$person['edu_comment']; ?></div>
                </div>
                <div class="row post col-12">
                    <div class="id col-2"><?=$key + 4; ?></div>
                    <div class="title col-5">Педстаж</div>
                    <div class="title col-5"><?=$person['stag']; ?></div>
                </div>
                <div class="row post col-12">
                    <div class="id col-2"><?=$key + 5; ?></div>
                    <div class="title col-5">Должность</div>
                    <div class="title col-5"><?=$person['dolgnost']; ?></div>
                </div>
                <div class="row post col-12">
                    <div class="id col-2"><?=$key + 6; ?></div>
                    <div class="title col-5">Категория</div>
                    <div class="title col-5"><?=$person['kateg']; ?></div>
                </div>
                <div class="row post col-12">
                    <div class="id col-2"><?=$key + 7; ?></div>
                    <div class="title col-5">Курсы повышения квалификации, семинары</div>
                    <div class="title col-5"><?=$person['courses']; ?></div>
                </div>
                <div class="row post col-12">
                    <div class="id col-2"><?=$key + 8; ?></div>
                    <div class="title col-5">Награды</div>
                    <div class="title col-5"><?=$person['nagr']; ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>        
</body>
</html>