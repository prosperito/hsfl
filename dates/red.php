<?php session_start();
    include "../app/controlles/posts.php";
    $posts = selectAll('posts', ['id_user' => $_SESSION['id']]);
    $cats = selectOne('user', ['id' => $_SESSION['username']]);
    // echo ($_GET);
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
<?php include("../app/include/header-posts.php"); ?>

<!-- блок main-->
<div class="container">
    <div class="content row">
        <!-- Main Content -->
        <div class="main-content col-md-9 col-12">
            <!-- <h2><?php echo $_SESSION['username']; ?></h2> -->

            <div class="posts col-12">
                
                <div class="row title-table">
                    <h2>Обновление записи</h2>
                </div>
                <div class="mb-3 col-12 col-md-4 err">
                    <p><?=$errMsg?></p>
                </div>
                                                      
                <div class="row add-post">

                    <form action="red.php" method="post" enctype="multipart/form-data">
                        
                        <input name="id" value="<?=$selectOnePostById['id'];?>" type="hidden">
                        <input name="nomerMo" value="<?=$selectOnePostById['id_mo'];?>" type="hidden">
                        <input name="id_crit" value="<?=$selectOnePostById['id_crit'];?>" type="hidden"> 
                        <div class="col">
                            <input name="title" value="<?=$selectOnePostById['title'];?>" type="text" class="form-control" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="content" class="form-label">Описание</label>
                            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="6"><?=$selectOnePostById['content']; ?></textarea>
                        </div>
                        <div class="col">
                            <input name="ball" value="" type="text" class="form-control" placeholder="Баллы<?=$selectOnePostById['ball']; ?>" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Добавить</label></div>
                                <input type="hidden" name="id_cat" value="<?=$_GET['id'] ?>">
                            </label>
                        </div> 
                        <div class="col col-6">
                            <button name="edit" class="btn btn-primary" type="submit">Обновить запись</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- sidebar Content -->
        <!-- <div class="sidebar col-md-3 col-12">
           
           <?php include("../app/include/sidebarUser.php"); ?>

       </div> -->
   </div>
</div>     
</body>
</html>