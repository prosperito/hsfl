<div class="section topics">
                
            <div class="section search">
                <h3>Поиск</h3>
                <form action="search.php" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово..." required>
                </form>
            </div>
            </div>
            
            
                <h3>Управление критериями</h3>
                <div class="section topics">
                        <?php foreach ($critos as $key => $crit): ?>
                            <li>
                            <a href="create-crit.php?id=<?=$crit['id']; ?>"> <?=$crit['name']; ?></a>
                            </li>
                        <?php endforeach; ?>
                </div>
            </div>
    

