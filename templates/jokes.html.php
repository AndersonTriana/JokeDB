
        <?php
        if (isset($error)): ?> 
            <p>
                <?= $error; ?>
            </p>
        <?php else: ?>
            <p><?= $totalJokes ?> jokes have been submitted to the Internet Joke Database.</p>

            <?php foreach ($jokes as $joke): ?>
                <blockquote>
                    <p>
                        <?= htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8') ?> 

                        (by <a href="mailto:<?= htmlspecialchars($joke['email'], ENT_QUOTES,'UTF-8'); ?>">
                            <?php echo htmlspecialchars($joke['name'], ENT_QUOTES,'UTF-8'); ?>
                        </a>)

                        <a href="editJoke.php?id=<?= $joke['id'] ?>">
                            Edit
                        </a>

                        <form action="deleteJoke.php" method="POST">
                            <input type="hidden" name="id" value="<?= $joke['id'] ?>">
                            <input type="submit" value="Delete"> 
                        </form>
                    </p>
                </blockquote>          
            <?php endforeach;
        endif;         
        

