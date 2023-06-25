<div class="section topics">
                
                <ul>
                    <li><a href="users-person.php">
                        
                    </a></li>

                </ul>
            </div>
            
            
                <h3>Добавить запись</h3>
                <div class="section topics">
                        <?php foreach ($critos as $key => $crit): ?>
                            <li>
                            <a href="create.php?id=<?=$crit['id']; ?>"> <?=$crit['name']; ?></a>
                            </li>
                        <?php endforeach; ?>
                </div>
            </div>