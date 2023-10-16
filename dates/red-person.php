<?php session_start();
   include "../app/controlles/personDat.php";
   $persons = selectAll('person1', ['id_user' => $_SESSION['id']]);
   $person = selectOne('person1', ['id_user' => $_SESSION['id']]);
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
                    <h2>Обновление данных</h2>
                </div>
                <div class="mb-3 col-12 col-md-4 err">
                    <p><?=$errMsg?></p>
                </div>
                                                      
                <div class="row add-post">

                    <form action="red-person.php" method="post" enctype="multipart/form-data">
                        
                        <input name="id" value="<?=$person['id'];?>" type="hidden">
                        <input name="id_user" value="<?=$person['id_user'];?>" type="hidden">
                        
                        <div class="w-100">
                            <label for="content" class="form-label">Дата рождения</label>
                            <input name="year_birth" value="<?=$person['year_birth'];?>" type="text" class="form-control" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="content" class="form-label">Образование</label>
                            <input name="edu" value="<?=$person['edu'];?>" type="text" class="form-control" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="content" class="form-label">Учебное заведение, год окончания</label>
                            <textarea name="edu_comment" class="form-control" id="exampleFormControlTextarea1" rows="6"><?=$person['edu_comment']; ?></textarea>
                        </div>
                        <div class="col">
                            <label for="content" class="form-label">Педстаж(только число)</label>
                            <input name="stag" value="<?=$person['stag'];?>" type="text" class="form-control" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="content" class="form-label">Должность</label>
                            <input name="dolgnost" value="<?=$person['dolgnost'];?>" type="text" class="form-control" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="content" class="form-label">Категория</label>
                            <input name="kateg" value="<?=$person['kateg'];?>" type="text" class="form-control" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="content" class="form-label">Курсы повышения, семинары</label>
                            <textarea name="courses" class="form-control" id="exampleFormControlTextarea1" rows="6"><?=$person['courses']; ?></textarea>
                        </div>
                        <div class="col">
                            <label for="content" class="form-label">Награды</label>
                            <textarea name="nagr" class="form-control" id="exampleFormControlTextarea1" rows="6"><?=$person['nagr']; ?></textarea>
                        </div>
                        <div class="col col-6">
                            <button name="edit-dates" class="btn btn-primary" type="submit">Сохранить</button>
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