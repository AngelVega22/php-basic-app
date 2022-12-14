<?php

$app = [];

$app['config'] = require 'config.php';

require 'core/Router.php';

require 'core/database/Connection.php';

require 'core/database/QueryBuilder.php';

require 'core/database/Request.php';

 $app['database'] =  new QueryBuilder(connection::make($app['config']["database"]));