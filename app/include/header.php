<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h3>
                    Рейтинговая система оценки деятельности
                </h3>
            </div>
            <nav class="col-8">
                <ul>
                    <!-- <li><a href="/">Главная</a> </li>
                    <li><a href="MO.php">Методобъединения</a> </li>
                         -->
                    <li>
                        <?php if (isset($_SESSION['id'])): ?>
                            <a href="logout.php">
                            <i class="fa fa-user"></i>
                            <?php echo $_SESSION['login']; ?>
                        </a>

                        <ul>
                            <li><a href="logout.php">Выход</a> </li>
                        </ul>
                        <?php endif; ?>    
                         
                    </li>
                    
                </ul>
            </nav>
        </div>
    </div>
</header>
