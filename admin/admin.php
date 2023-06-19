<?php session_start();
    include "../app/controlles/topics.php";
    $posts = selectAll('posts', ['status'=>1]);

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
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Рейтинговая система</title>
</head>
<body>

<?php include("../app/include/header-admin.php"); ?>

<!-- блок main-->
<div class="container">
    <div class="content row">
        <!-- Main Content -->
        <div class="main-content col-md-9 col-12">
            <h2>Достижения педагогов</h2>
            <?php foreach($posts as $post): ?>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="<?='assets/images/post/' . $post['img'] ?>" alt="<?=$post['title']?>" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#"><?=substr($post['title'], 0, 120) . '...' ?></a></a>
                        </h3>
                        <p>
                            сч
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
            
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
                    <li><a href="edit-crit.php">Управление критериями</a></li>
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