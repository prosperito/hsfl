<?php 
    include 'app/database/db.php';
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/css/bootstrap.min.css" rel="stylesheet" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>My blog</title>
</head>
<body>

<!--HEADER-->
<?php include("app/include/header.php"); ?>


<!-- блок карусели START-->
<div class="container">
    <div class="row">
        <h2 class="slider-title"></h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/image_1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href=""> First slide label</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/image_2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href=""> First slide label</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/image_13.png" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href=""> First slide label</a></h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- блок карусели END-->

<!-- блок main-->
<div class="container">
    <div class="content row">
        <!-- Main Content -->
        <div class="main-content col-md-9 col-12">
            <h2>
                О системе
            </h2>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/image_small.png" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прикольная статья на тему динамеческого сайта...</a>
                    </h3>
                    <i class="far fa-user"> Имя Автора</i>
                    <i class="far fa-calendar"> Mar 11, 2019</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Exercitationem optio possimus a inventore maxime laborum.
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/image_1.png" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прикольная статья на тему динамеческого сайта...</a>
                    </h3>
                    <i class="far fa-user"> Имя Автора</i>
                    <i class="far fa-calendar"> Mar 11, 2019</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Exercitationem optio possimus a inventore maxime laborum.
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="images/image_small.png" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прикольная статья на тему динамеческого сайта...</a>
                    </h3>
                    <i class="far fa-user"> Имя Автора</i>
                    <i class="far fa-calendar"> Mar 11, 2019</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Exercitationem optio possimus a inventore maxime laborum.
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="images/image_small.png" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прикольная статья на тему динамеческого сайта...</a>
                    </h3>
                    <i class="far fa-user"> Имя Автора</i>
                    <i class="far fa-calendar"> Mar 11, 2019</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Exercitationem optio possimus a inventore maxime laborum.
                    </p>
                </div>
            </div>
            

        </div>
        <!-- sidebar Content -->
        <div class="sidebar col-md-3 col-12">

            <!-- <div class="section search">
                <h3>Поиск</h3>
                <form action="/" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово...">
                </form>
            </div> -->


            <div class="section topics">
                <h3>Критерии рейтинга</h3>
                <ul>
                    <li><a href="#">ио</a></li>
                    <li><a href="#">Дизайн</a></li>
                    <li><a href="#">Визуализация</a></li>
                    <li><a href="#">Кейсы</a></li>
                    <li><a href="#">Мотивация</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>

<!-- блок main END-->
<!-- footer -->
<div class="footer container-fluid">
    <div class="footer-content container">
        <div class="row">
            <div class="footer-section about col-md-4 col-12">
                <h3 class="logo-text">Мой блог</h3>
                <p>
                    Мой блог - это блог сделаннный с целью обучения аудитории на платформе
                    YouTube и заработка доволнительной кармы)).
                </p>
                <div class="contact">
                    <span><i class="fas fa-phone"></i> &nbsp; 123-456-789</span>
                    <span><i class="fas fa-envelope"></i> &nbsp; info@myblog.com</span>
                </div>
                <div class="socials">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-section links col-md-4 col-12">
                <h3>Quick Links</h3>
                <br>
                <ul>
                    <a href="#">
                        <li>События</li>
                    </a>
                    <a href="#">
                        <li>Команда</li>
                    </a>
                    <a href="#">
                        <li>Упражнения</li>
                    </a>
                    <a href="#">
                        <li>Галлерея</li>
                    </a>
                    <a href="#">
                        <li>Что-то еще</li>
                    </a>
                </ul>
            </div>

            <div class="footer-section contact-form col-md-4 col-12">
                <h3>Контакты</h3>
                <br>
                <form action="index.html" method="post">
                    <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
                    <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
                    <button type="submit" class="btn btn-big contact-btn">
                        <i class="fas fa-envelope"></i>
                        Отправить
                    </button>
                </form>
            </div>

        </div>

        <div class="footer-bottom">
            &copy; myblog.com | Designed by Andrievskii
        </div>
    </div>
</div>
<!-- // footer -->


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
-->
</body>
</html>