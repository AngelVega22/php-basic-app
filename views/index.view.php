<?php require('partials/head.php') ?>

<div class="container mt-5">
    <div class="row">
        <div class="list-group col-12 col-md-5">
            <h1 class="text-center mb-4">Add task</h1>
            <div>
                <form method="POST" action="/task">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="task" aria-describedby="task" name="task"
                            placeholder="Write a new task...">
                    </div>
                    <button type="submit" class="btn btn-outline-dark w-100">Add</button>
                </form>
            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="list-group col-12 col-md-5">
            <h1 class="text-center mb-3">Tasks</h1>
            <?php foreach ($tasks as $task) : ?>
            <?php if ($task->completed) : ?>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <strike>
                        <h5 class="mb-1"> <?= $task->description; ?></h5>
                    </strike>
                    <small class="text-muted"><?= $task->created_at; ?></small>
                </div>
            </a>
            <?php else : ?>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"> <?= $task->description; ?></h5>
                    <small class="text-muted"><?= $task->created_at; ?></small>
                </div>
            </a>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</div>
<?php require('partials/footer.php') ?>