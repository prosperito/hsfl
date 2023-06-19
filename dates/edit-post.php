<?php session_start();
    include "../app/controlles/posts.php";
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../assets/css/posts_style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Рейтинговая система</title>
</head>
<body>

<!--HEADER-->
<?php include("../app/include/header-posts.php"); ?>

<!-- блок main-->
<div class="container">
    <div class="content row">
        <!-- Main Content -->
        <div class="main-content col-md-12 col-12">
        <h2><?php echo $_SESSION['username']; ?></h2>

            <div class="posts col-12">
                <div class="button row">
                    <a href="create-post.php" class="col-2 btn btn-success">Добавить</a>
                    <span class="col-1"></span>
                    <a href="edit-post.php" class="col-2 btn btn-warning">Редактировать</a>
                </div>

                <div class="row title-table">
                    <h3>Управление записями</h3>
                    <div class="id col-1">№</div>
                    <div class="col-5">Название</div>
                    <div class="col-2">Автор</div>
                    <div class="col-4" col-1>Управление</div>
                </div>
               
                <?php foreach ($posts as $key => $post): ?>
                <div class="row post col-12">
                    <div class="id col-1"><?=$key + 1; ?></div>
                    <div class="title col-5"><?=$post['title']; ?></div>
                    <div class="title col-2"><?=$post['id_user']; ?></div>
                    <div class="red col-1" col-1><a href="post-red.php?id=<?=$post['id']; ?>">edit</a></div>
                    <div class="red col-1" col-1><a href="edit-post.php?del_id=<?=$post['id']; ?>">delete</a></div>
                    <?php if ($post['status']): ?>
                        <div class="status col-2" col-1><a href="edit-post.php?del_id=<?=$post['id']; ?>">в черновик</a></div>
                    <?php else: ?>
                        <div class="status col-2" col-1><a href="edit-post.php?del_id=<?=$post['id']; ?>">опубликавать</a></div>
                    <?php endif; ?>
                </div>

                <?php endforeach; ?>
            </div>
        </div>        
</body>
</html>