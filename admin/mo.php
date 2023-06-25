<?php session_start();
    include "../app/controlles/posts.php";
    $posts = selectAll('posts', ['id_mo' => $_GET['id']]);
    // $user = selectAll('user');
    $mort = selectOne('MO', ['id'=>$_GET['id']]);

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
        <div class="main-content col-9 col-md-12 ">
        <h4><?=$mort['name']; ?></h4>
                
                
            <h4>Достижения педагогов</h4>

            <input type="hidden" name="id_mo" value="<?=$MO ?>">
            <?php foreach ($posts as $post): ?>
                    <div class="row col-12">
                        <div class="img col-12 col-md-4">
                            <img src="<?= '../assets/img/' . $post['img'] ?>">
                        </div>
                        <div class="post_text col-12 col-md-8">
                            <h3>
                                <a href="<?='../admin/single.php?post=' . $post['id'];?>">
                                    <?= substr($post['title'], 0, 120) . '...' ?>
                                </a></a>
                            </h3>
                            <i class="far fa-user"> <?=$post['username'];?></i>
                            <i class="far fa-calendar">
                                <?= $post['datetime']; ?>
                            </i>

                            <p>
                                <?= mb_substr($post['content'], 0, 150, 'UTF-8') . '...' ?>
                            </p>

                            <div class="col-1 col-md-4">
                                Количество баллов<input name="ball" value="<?= $ball ?>" type="text" class="form-control"
                                    id="formGroupExampleInput" placeholder="<?= $post['ball']; ?>">
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>


        <!-- sidebar Content -->
        <div class="sidebar col-md-3 col-12">
                    <?php include("../app/include/sidebar-admin.php"); ?>
           
                </div>
        </div>
</div>
<!-- блок main END-->





</body>
</html>