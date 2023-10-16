<?php 
    include "../app/controlles/posts.php";
    $post = selectPostFromPostsWithUserOnSingle('posts', 'user', $_GET['post']);
?>

<!doctype html>
<html lang="en">
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
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Рейтинговая система</title>
</head>
<body>
<?php include("../app/include/header-admin.php"); ?>

<!-- блок main-->
<div class="container">
    <div class="content row">
        <!-- Main Content -->
        <div class="main-content col-md-9 col-12">
            
                <h2><?php echo $post['title']; ?></h2>
                <div class="single_post_text col-12">
                        <?= $post['user_name']; ?>
                    </div>
                <div class="single_post row">
                    <div class="img col-12">
                        <img src="<?= '../assets/img/' . $post['img'] ?>" alt="" class="img-thumbnail">
                    </div>
                    <div class="info">
                        <a href="<?='../admin/person.php?post=' . $post['id_user'];?>"><i class="far fa-user"> <?= $post['username']; ?></i></a>
                        <i class="far fa-calendar"> <?= $post['datetime']; ?></i>
                    </div>
                    <div class="single_post_text col-12">
                        <?= $post['content']; ?>
                    </div>
                </div>
              
        <!-- sidebar Content -->
            
            <!-- <div class="sidebar col-md-3 col-12">
                <?php include("../app/include/sidebar-admin.php"); ?>
            </div> -->
        </div>
    </div>
</div>

<!-- блок main END-->
<!-- footer -->

</body>
</html>