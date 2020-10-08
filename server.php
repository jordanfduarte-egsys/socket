<?php

require './vendor/autoload.php';

use Ratchet\Server\EchoServer;

$app = new Ratchet\App('websocket1000.herokuapp.com', 9980);
$app->route('/echo', new EchoServer, ['*']);
$app->run();
