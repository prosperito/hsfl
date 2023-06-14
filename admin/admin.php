<?php session_start();
    include "../app/controlles/topics.php";
?>

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
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Рейтинговая система</title>
</head>
<body>

<?php include("../app/include/header-admin.php"); ?>
<!-- <header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h3>
                    Рейтинговая система оценки деятельности
                </h3>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="/">Главная</a> </li>
                    <li><a href="../MO.php">Методобъединения</a> </li>
                    
                    <li>
                        <?php if (isset($_SESSION['id'])): ?>
                            <a href="logout.php">
                            <i class="fa fa-user"></i>
                            <?php echo $_SESSION['login']; ?>
                        </a>

                        <?php endif; ?>    
                         
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header> -->




<!-- блок main-->
<div class="container">
    <div class="content row">
        <!-- Main Content -->
        <div class="main-content col-md-8 col-12">
            <h2>Достижения педагогов</h2>

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
        <div class="sidebar col-md-4 col-12">
        
            <div class="section search">
                <h3>Поиск</h3>
                <form action="/" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово...">
                </form>
            </div>


            <div class="section topics">


                <h3>Категории</h3>
                <ul>
                    <li><a href="#">Управление критериями</a></li>
                    <li><a href="#">Воспитательная работа</a></li>
                    <li><a href="#">Классное руководство</a></li>
                    <li><a href="#">Научно-методическая деятельность</a></li>
                    <li><a href="#">Результативность ИКД</a></li>
                    <li><a href="create-krit.php">Добавить критерий</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>

<!-- блок main END-->

</body>
</html>