<?php session_start();
    include "../app/controlles/personDat.php";
    $persones = selectAll('person1', ['id_user' => $_SESSION['id']]);
    $person = selectOne('person1', ['id' => $_SESSION['username']]);
?>

<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
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
                    <h2>Добавление персональных данных в базу</h2>
                    
                </div>
                <!-- <h4>Выберите сначала категорию, затем критерий</h4> -->
                <!-- <div class="section topics">
                        <?php foreach ($critos as $key => $crit): ?>
                            <li>
                            <a href="create.php?id=<?=$crit['id']; ?>"> <?=$crit['name']; ?></a>
                            </li>
                        <?php endforeach; ?>
                </div> -->
                <div class="mb-3 col-12 col-md-4 err">
                    <p></p>
                </div>
                <div class="row add-post">
               
                    <form action="create-person.php" method="post" enctype="multipart/form-data">
                        <input name="id" value="<?=$person['id'];?>" type="hidden">
                        <div class="mb-3 col-12 col-md-4 err">
                            <p><?=$errMsg?></p>
                        </div>
                        <div class="col">
                            <input name="year_birth" value="" type="text" class="form-control" placeholder="Дата рождения" aria-label="First name">
                        </div>
                        <p></p>
                        <div class="col">
                            <input name="edu" value="" type="text" class="form-control" placeholder="Образование" aria-label="First name">
                        </div>
                        <p></p>
                        <div class="col">
                            <input name="edu_comment" value="" type="text" class="form-control" placeholder="Учебное заведение, год окончания" aria-label="First name">
                        </div>
                        <p></p>
                        <div class="col">
                            <input name="stag" value="" type="text" class="form-control" placeholder="Педстаж(запишите только число)" aria-label="First name">
                        </div>
                        <p></p>
                        <div class="col">
                            <input name="dolgnost" value="" type="text" class="form-control" placeholder="Должность" aria-label="First name">
                        </div>
                        <p></p>
                        <div class="col">
                            <input name="kateg" value="" type="text" class="form-control" placeholder="Категория" aria-label="First name">
                        </div>
                        <p></p>
                        <div class="col">
                            <textarea name="courses" class="form-control" id="exampleFormControlTextarea1" rows="6">Курсы повышения квалификации, семинары</textarea>
                        </div>
                        <p></p>
                        <div class="col">
                            <textarea name="nagr" class="form-control" id="exampleFormControlTextarea1" rows="6">Награды</textarea>
                        </div>
                        <p></p>
                        <div class="col">
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Добавить</label></div>
                                <input type="hidden" name="id_cat" value="<?=$_GET['id'] ?>">
                            </label>
                        </div>
                        <p></p> 
                        <div class="col col-6">
                            <button name="add_person" class="btn btn-primary" type="submit">Сохранить</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>