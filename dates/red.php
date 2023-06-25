<?php session_start();
    include "../app/controlles/posts.php";
    // echo $post['id'];
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
        <!-- Main Content -->
        <div class="main-content col-md-12 col-12">
            <h2><?php echo $_SESSION['username']; ?></h2>

            <div class="posts col-9">
                
        
                <div class="row title-table">
                    <h2>Обновление записи</h2>
                    
                </div>
                <div class="mb-3 col-12 col-md-4 err">
                    <p><?=$errMsg?></p>
                </div>
                <h4>Выберите критерий</h4>
                
                <div class="section topics">
                        <?php foreach ($critos as $key => $crit): ?>
                            <li>
                            <a href="red.php?id=<?=$crit['id']; ?>"> <?=$crit['name']; ?></a>
                            </li>
                        <?php endforeach; ?>
                </div>
                <input type="hidden" name="id_cat" value="<?=$_GET['id'] ?>">
                        <select name="crit" class="form-select" aria-label="Default select example">
                            
                        <option selected>Критерий</option>


                            <?php 
                            
                            $id = $_GET['id']; // Здесь указывается ситуация (цифра), в зависимости от которой выбирается переменная

                            // Массив с переменными
                            $variables = [
                                $cat1post, // Переменная для ситуации 1
                                $cat2post, // Переменная для ситуации 2
                                $cat3post, // Переменная для ситуации 3
                                $cat4post  // Переменная для ситуации 4
                            ];

                            foreach ($variables[$id - 1] as $key => $cat1): ?>
                                <option value="<?=$cat1['id']; ?>"><?=$cat1['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                <div class="row add-post">

                    <form action="post-red.php" method="post" enctype="multipart/form-data">

                        <input name="id" value="<?=$selectOnePostById['id'];?>" type="hidden">
                        <input name="nomerMo" value="<?=$nomerMo['id_mo'];?>" type="hidden"> 
                        <div class="col">
                            <input name="crit" value="<?=$selectOnePostById['crit'];?>" type="text" class="form-control" aria-label="First name">
                        </div> 
                        <div class="col">
                            <input name="cat" value="<?=$selectOnePostById['crit'];?>" type="text" class="form-control" aria-label="First name">
                        </div>                  
                        <div class="col">
                            <input name="title" value="<?=$selectOnePostById['title'];?>" type="text" class="form-control" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="content" class="form-label">Описание</label>
                            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="6"><?=$selectOnePostById['content']; ?></textarea>
                        </div>
                        <div class="col-2">
                            <input name="ball" value="" type="text" class="form-control" placeholder="Баллы" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                            <!-- <label class="input-group-text" for="inputGroupFile02">Обновить</label> -->
                        </div>
                        <select name="crit" class="form-select" aria-label="Default select example">
                            <!-- <?php foreach ($critos as $key => $crit): ?>
                                <option value="<?=$crit['id']; ?>"><?=$crit['name']; ?></option>
                            <?php endforeach; ?> -->
                            <?php 
                            
                            $id = $_GET['id']; ?>
                        </select>

                        <!-- <div class="form-check">
                            <?php if (empty($selectOnePostById['publish']) && $selectOnePostById['publish'] == 0): ?>
                            <input name="publish" class="form-check-input" type="checkbox" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                 publish
                            </label>
                            <?php else: ?>
                                <input name="publish" class="form-check-input" type="checkbox" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked" checked>
                                 publish
                            </label>
                            <?php endif; ?>
                        </div> -->
   

                        <div class="col col-6">
                            <button name="edit-post" class="btn btn-primary" type="submit">Обновить запись</button>
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
</body>
</html>