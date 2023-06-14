
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
    <link rel="stylesheet" href="../../assets/css/posts_style.css">
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

            <div class="posts col-9">
                <div class="button row">
                    <a href="/dates/create.php" class="col-2 btn btn-success">Добавить</a>
                    <span class="col-1"></span>
                    <a href="/dates/users.php" class="col-2 btn btn-warning">Редактировать</a>
                </div>
        
                <div class="row title-table">
                    <h2>Добавление записей</h2>
                    
                </div>

                <div class="row add-post">
                    <form action="create.php" method="post">
                        <select name="crit_cat" class="form-select" aria-label="Default select example">
                            <option selected>Выбрать критерий</option>
                            <option value="1">Уровень верхней планки освоения обучающимися учебной программы</option>
                            <option value="2">Уровень достижений обучающихся в олимпиадах</option>
                            <option value="3">Результативность деятельности учителя по независимой внешней оценке</option>
                            <option value="4">Работа в комиссиях</option>
                            <!-- <option value="3">Школьный</option> -->
                        </select>
                    
                        <div class="col">
                            <input name="name" type="text" class="form-control" placeholder="Название записи" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="desciption" class="form-label">Содержимое записи</label>
                            <textarea name="descript" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                        </div>
                        <div class="col">
                            <input name="pick" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Добавить</label>
                        </div>

                        <div class="col">
                            <button name="post-create" class="btn btn-primary" type="submit">Сохранить запись</button>
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