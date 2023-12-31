
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
                    <li><a href="../../admin/admin.php">Главная</a></li>
                    <li>
                    <a href="#">МО</a>
                        <ul>
                            <?php foreach ($MO as $key => $mo): ?>
                                <li>
                                    <a href="<?='../../admin/mo.php?id=' . $mo['id']; ?>"> <?=$mo['name']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                     </li>
                    
                     <li>
                    <a href="#">Для отчетов</a>
                        <ul>
                            <?php foreach ($critos as $key => $crit): ?>
                                <li>
                                    <a href="<?='../../admin/crit2.php?id=' . $crit['id']; ?>"> <?=$crit['name']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                     </li>

                    <?php if (isset($_SESSION['id'])): ?>
                    <li>
                        <a href="../../logout.php">
                            <i class="fa fa-user"></i>
                            <?php echo $_SESSION['username']; ?>
                        </a>
                        <ul>
                            <li><a href="../../logout.php">Выход</a> </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
</header>
