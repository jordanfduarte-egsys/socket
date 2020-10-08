<?php

require './vendor/autoload.php';

use Ratchet\Server\EchoServer;

$app = new Ratchet\App('localhost', 9980);
$app->route('/', new EchoServer, ['*']);
$app->run();