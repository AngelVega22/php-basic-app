<?php require('partials/head.php')?>



<div class="container mt-5">

    <div class="list-group col-12 col-md-6">
<h1 class="text-center mb-3">To do app</h1>

    <?php foreach($tasks as $task) : ?>
        <?php if($task -> completed) : ?>
            <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
            <strike> <h5 class="mb-1">   <?= $task -> description; ?></h5></strike>
                <small class="text-muted"><?= $task -> created_at; ?></small>
            </div>
        </a>
               <?php else: ?>
                <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">   <?= $task -> description; ?></h5>
                <small class="text-muted"><?= $task -> created_at; ?></small>
            </div>

        </a>
            <?php endif; ?>


        <?php endforeach; ?>

    </div>
</div>
<?php require('partials/footer.php')?>