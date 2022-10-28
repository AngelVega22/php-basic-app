<?php

$app['database']->insert('task', ['description' => $_POST['task']]);

header('Location:/');