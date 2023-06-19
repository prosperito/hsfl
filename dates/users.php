<?php session_start(); ?>

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
    <link rel="stylesheet" href="../assets/css/posts_style.css">
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
        <div class="main-content col-md-9 col-12">
            <h2><?php echo $_SESSION['username']; ?></h2>

            <div class="posts col-8">
                <div class="button row">
                    <a href="/dates/create.php" class="col-2 btn btn-success">Добавить</a>
                    <span class="col-1"></span>
                    <a href="/dates/users.php" class="col-2 btn btn-warning">Редактировать</a>
                </div>
        
                <div class="row title-table">
                    <h3>Управление записями</h3>
                    <div class="id col-1">№</div>
                    <div class="col-3">Критерий</div>
                    <div class="col-3">Категория</div>
                    <div class="col-4" col-1>Управление</div>
                </div>

                <div class="row post">

                    <div class="id col-1">1</div>
                    <div class="title col-3">title</div>
                    <div class="autor col-3">autor</div>
                    <div class="red col-2" col-1><a href="">edit</a></div>
                    <div class="del col-2" col-1><a href="">delete</a></div>
                </div>


            </div>
<!-- sidebar Content -->
<div class="sidebar col-md-4 col-12">
           
           <?php include("../app/include/sidebarUser.php"); ?>

       </div>
                       
        </div>
        
    </div>
</div>

<!-- блок main END-->

</body>
</html>
