
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


                    <?php if (isset($_SESSION['id'])): ?>
                    <li>
                        <a href="../../logout.php">
                            <i class="fa fa-user"></i>
                            <?php echo $_SESSION['username']; ?>
                        </a>
                    </li>
                    <li><a href="../../logout.php">Выход</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
</header>
