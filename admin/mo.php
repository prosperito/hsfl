<?php 
    include "../app/controlles/posts.php";
    $posts = selectAll('posts', ['id_mo' => $_GET['id']]);
    $mort = selectOne('MO', ['id'=>$_GET['id']]);
?>

<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../assets/css/css/bootstrap.min.css" rel="stylesheet">

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
        <div class="mb-3 col-12 col-md-4 err">
            <p><?=$errMsg?></p>
        </div>
        <h4><?=$mort['name']; ?></h4>
        <div class="mb-3 col-12 col-md-4 err">
            <p><?=$errMsg?></p>
        </div>                    
            <h4>Достижения педагогов</h4>
            <div class="mb-3 col-12 col-md-4 err">
                <p><?=$errMsg?></p>
            </div>
            <div class="row title-table">
                    
                    <div class="w-100"></div>
                    <div class="id col-1">№</div>
                    <div class="col-3">Педагог</div>
                    <div  class="col-3">Название мероприятия</div>
                    <div class="col-4">Описание достижения</div>
                    <div class="col-1" col-1>Дата</div>
                
            <input type="hidden" name="id_mo" value="<?=$MO ?>">
            
               
                <?php foreach ($posts as $post): ?>
                <div class="row post col-12">
                    <div class="id col-1"><?=$key + 1; ?></div>
                    <div class="user col-3"><?= $post['id_user']; ?></div>
                    <!-- <div class="title col-3"><a href="<?='../admin/single.php?post=' . $post['id'];?>"> -->
                                    <?= $post['title']; ?>
                                <!-- </a></div> -->
                    <div class="content col-4"><?= mb_substr($post['content'], 0, 150, 'UTF-8') . '...' ?></div>
                    <div class="datetime col-1"><?= $post['datetime']; ?></div>

                </div>

                <?php endforeach; ?>

        <!-- sidebar Content -->
        
</div>
<!-- блок main END-->





</body>
</html>