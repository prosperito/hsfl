<?php session_start();
    include "../app/controlles/cathegory.php";
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
        <div class="mb-12 col-12 col-md-12 err">
            <p><?=$errMsg?></p>
        </div>

            <div class="posts col-12">
                <div class="button row">
                    <a href="create-cathegory.php" class="col-2 btn btn-success">Добавить</a>
                    <span class="col-1"></span>
                    <!-- <a href="edit-cath.php" class="col-2 btn btn-warning">Редактировать</a> -->
                </div>
                <h3>Управление критериями</h3>
                <div class="row title-table">
                    
                    <div class="id col-1">№</div>
                    <div class="col-5">Название</div>
                    <div class="col-6" col-1>Управление</div>
                </div>
               
                <?php foreach ($cathegorys as $key => $cath): ?>
                <div class="row post col-12">
                    <div class="id col-1"><?=$key + 1; ?></div>
                    <div class="title col-7"><?=$cath['name']; ?></div>
                    <div class="red col-2" col-1><a href="./edit1cath.php?id=<?=$cath['id']; ?>">edit</a></div>
                    <div class="red col-2" col-1><a href="./edit-cath.php?del_id=<?=$cath['id']; ?>">delete</a></div>
                </div>

                <?php endforeach; ?>
            </div>

        </div>        
</body>
</html>