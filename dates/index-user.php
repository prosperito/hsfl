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
        <div class="main-content col-md-8 col-12">
        <h2><?php echo $_SESSION['username']; ?></h2>

            <h2>Мои достижения</h2>

            <div class="post row">
                <!-- <div class="img col-12 col-md-4">
                    <img src="images/image_small.png" alt="" class="img-thumbnail">
                </div> -->
                <div class="post_text col-12 col-md-12">
                    <h3>
                        <a href="#">ФИО</a></a>
                    </h3>
                        сч
                    </p>
                </div>
            </div>
            <div class="post row">
                <!-- <div class="img col-12 col-md-4">
                    <img src="images/image_small.png" alt="" class="img-thumbnail">
                </div> -->
                <div class="post_text col-12 col-md-12">
                    <h3>
                        <a href="#">фио</a>
                    </h3>
                    <!-- <i class="far fa-user"> Имя Автора</i>
                    <i class="far fa-calendar"> Mar 11, 2019</i> -->
                    <p class="preview-text">
                        тот
                    </p>
                </div>
            </div>
            <div class="post row">
                <!-- <div class="img col-12 col-md-4">
                    <img src="images/image_small.png" alt="" class="img-thumbnail">
                </div> -->
                <div class="post_text col-12 col-md-12">
                    <h3>
                        <a href="#">фио</a>
                    </h3>
                    <!-- <i class="far fa-user"> Имя Автора</i>
                    <i class="far fa-calendar"> Mar 11, 2019</i> -->
                    <p class="preview-text">
                        ычoы
                    </p>
                </div>
            </div>
            <div class="post row">
                <!-- <div class="img col-12 col-md-4">
                    <img src="images/image_small.png" alt="" class="img-thumbnail">
                </div> -->
                <div class="post_text col-12 col-md-12">
                    <h3>
                        <a href="#">ифр</a>
                    </h3>
                    <!-- <i class="far fa-user"> Имя Автора</i>
                    <i class="far fa-calendar"> Mar 11, 2019</i> -->
                    <p class="preview-text">
                       с
                    </p>
                </div>
            </div>
            <div class="post row">
                <!-- <div class="img col-12 col-md-4">
                    <img src="images/image_small.png" alt="" class="img-thumbnail">
                </div> -->
                <div class="post_text col-12 col-md-12">
                    <h3>
                        <a href="#">ысы</a>
                    </h3>
                    <!-- <i class="far fa-user"> Имя Автора</i>
                    <i class="far fa-calendar"> Mar 11, 2019</i> -->
                    <p class="preview-text">
                        ваы
                    </p>
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