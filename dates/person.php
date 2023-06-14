<?php session_start(); ?>


<!doctype html>
<html lang="en">
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
    <title>My blog</title>
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
                    <a href="/dates/add-person-date.php" class="col-2 btn btn-warning">Редактировать</a>
                </div>
        
                <div class="row title-table">
                    <h3>Персональные данные</h3>
                </div>

                <div class="w-100"></div>

                
                <div class="row post">
                    <div class="id col-1">1</div>
                    <div class="title col-3">Дата рождения</div>
                    <div class="title col-3"><?=$addperson[$age];?></div>
                </div>
                <div class="row post">
                    <div class="id col-1">2</div>
                    <div class="title col-3">Образование</div>
                    <div class="title col-7"><?=$addperson[$educa];?></div>
                    <div class="red col-1" col-1><a href="">edit</a></div>
                </div>
                <div class="row post">
                    <div class="id col-1">3</div>
                    <div class="title col-3">Должность, предмет</div>
                    <div class="title col-7"><?=$addperson[$posi];?></div>
                    <div class="red col-1" col-1><a href="">edit</a></div>
                </div>
                <div class="row post">
                    <div class="id col-1">4</div>
                    <div class="title col-3">Категория, срок аттестации</div>
                    <div class="title col-7"><?=$addperson[$cath];?></div>
                    <div class="red col-1" col-1><a href="">edit</a></div>
                </div>
                <div class="row post">
                    <div class="id col-1">5</div>
                    <div class="title col-3">Награды</div>
                    <div class="title col-7"><?=$addperson[$rewa];?></div>
                    <div class="red col-1" col-1><a href="">edit</a></div>
                </div>
                <div class="row post">
                    <div class="id col-1">6</div>
                    <div class="title col-3">Курсы ПК</div>
                    <div class="title col-7"><?=$addperson[$course];?></div>
                    <div class="red col-1" col-1><a href="">edit</a></div>
                </div>
                
            </div>

                       
        </div>
        <!-- sidebar Content -->
        <div class="sidebar col-md-3 col-12">
           
            <?php include("../app/include/sidebarUser.php"); ?>

        </div>
    </div>
</div>

<!-- блок main END-->

</body>
</html>
