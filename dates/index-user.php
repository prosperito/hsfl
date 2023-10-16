<?php session_start();
    include "../app/controlles/posts.php";
    $posts = selectAll('posts', ['id_user' => $_SESSION['id']]);
    $cats = selectOne('user', ['id' => $_SESSION['username']]);
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
                    <a href="index-person.php" class="col-2 btn btn-success">Перейти <br>к перс.данным</a>
                    <span class="col-1"></span>
                    <a href="create.php?id=<?= $person['id_user'] ?>" class="col-2 btn btn-warning">Добавить<br>достижение</a>
                </div>
 
                <div class="row post col-12">
                    <h3>Управление записями</h3>
                    <div class="id col-1">№</div>
                    <div class="col-4">Название</div>
                    <div class="col-4">Содержание</div>
                    <div class="col-1">Балл</div>
                    <div class="col-2">Управление</div>
                </div>
               
                <?php foreach ($posts as $key => $post): ?>
                <div class="row post col-12">
                    <div class="id col-1"><?=$key + 1; ?></div>
                    <div class="title col-4"><?=$post['title']; ?></div>
                    <div class="title col-4"><?=$post['content']; ?></div>
                    <div class="title col-1"><?=$post['ball']; ?></div>
                    <div class="red col-1" col-1><a href="red.php?id=<?=$post['id']; ?>">edit</a></div>
                    <div class="red col-1" col-1><a href="index-user.php?del_id=<?=$post['id']; ?>">delete</a></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>        
</body>
</html>