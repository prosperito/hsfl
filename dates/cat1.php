<?php session_start();
   
   require "../app/controlles/posts.php";

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

            <div class="posts col-9">
                <div class="button row">
                    <a href="/dates/create-post.php" class="col-2 btn btn-success">Добавить</a>
                    <span class="col-1"></span>
                    <a href="/dates/edit-post.php" class="col-2 btn btn-warning">Редактировать</a>
                </div>
        
                <div class="row title-table">
                    <h2>Добавление записей</h2>
                    
                </div>

                <div class="row add-post">
                    <form action="create-post.php" method="post" enctype="multipart/form-data">
                    
                        <div class="col">
                            <input name="title" value="" type="text" class="form-control" placeholder="Название записи" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="content" class="form-label">Содержимое записи</label>
                            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                        </div>
                        <div class="col">
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Добавить</label>
                        </div>
                        <select name="crit1" class="form-select" aria-label="Default select example">
                            <option selected>Выберите критерий</option>
                            <?php foreach ($cat1post as $key => $cat1): ?>
                                <option value="<?=$cat1['id']; ?>"><?=$cat1['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="form-check">
                            <input name="publish" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                 Опубликовано
                            </label>
                        </div>
                        <div class="col col-6">
                            <button name="add_post" class="btn btn-primary" type="submit">Создать запись</button>
                        </div>
                    </form>
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