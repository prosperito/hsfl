<?php session_start();
    include "../app/controlles/topics.php";
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
<?php include("../app/include/header-admin.php"); ?>

<!-- блок main-->
<div class="container">
    <div class="content row">
        <!-- Main Content -->
        <div class="main-content col-md-12 col-8">
        <h2><?php echo $_SESSION['username']; ?></h2>

            <div class="posts col-12">
                <div class="button row">
                    <a href="create-crit.php" class="col-2 btn btn-success">Добавить</a>
                    <span class="col-1"></span>
                    <a href="edit-crit.php" class="col-2 btn btn-warning">Редактировать</a>
                </div>

                <div class="row title-table">
                    <h3>Управление критериями</h3>
                    <div class="id col-1">№</div>
                    <div class="col-5">Название</div>
                    <div class="col-3" col-1>Управление</div>
                </div>
               
                <?php foreach ($critos as $key => $crit): ?>
                <div class="row post col-12">
                    <div class="id col-1"><?=$key + 1; ?></div>
                    <div class="title col-5"><?=$crit['name']; ?></div>
                    <div class="red col-1" col-1><a href="./edit.php?id=<?=$crit['id']; ?>">edit</a></div>
                    <div class="red col-1" col-1><a href="./edit.php?del_id=<?=$crit['id']; ?>">delete</a></div>
                </div>

                <?php endforeach; ?>
            </div>

            <div class="post row" col-4>
                    <?php include("../app/include/sidebar-admin.php"); ?>
           
            </div>
        </div>        
</body>
</html>