<?php 
    session_start(); 
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
        <div class="main-content col-md-9 col-12">
            <h2><?php echo $_SESSION['username']; ?></h2>

            <h2>Мои достижения</h2>
            <?php foreach($posts as $post): ?>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="<?='../assets/img/' . $post['img'] ?>">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="../dates/index-user.php?post=' . $post['id'];?>"><?=substr($post['title'], 0, 120) . '...' ?></a></a>
                        </h3>
                        <i class="far fa-user"> <?=$post['username'];?></i>
                        <i class="far fa-calendar"> <?=$post['datetime'];?></i>
                        
                        <p>
                            <?=mb_substr($post['content'], 0, 150, 'UTF-8') . '...' ?>
                        </p>

                        <div class="mb-3 col-21 col-md-4">
                            <input name="ball" value="<?=$ball?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Количество баллов">
                        </div>
                        
                    </div>
                </div>
            <?php endforeach; ?>
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