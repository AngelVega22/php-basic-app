<?php require('partials/head.php')?>



    <div class="container mt-5">

        <ul>
            <?php foreach($tasks as $task) : ?>
            <li>
                <?php if($task -> completed) : ?>
                <strike><?= $task -> description; ?></strike>
                <?php else: ?>
                <?= $task -> description; ?>
                <?php endif; ?>
            </li>
            <?php endforeach; ?>

        </ul>

    </div>
    <?php require('partials/footer.php')?>
