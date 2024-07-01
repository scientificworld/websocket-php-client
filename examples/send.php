<?php

require(dirname(dirname(__FILE__)) . '/WebSocketClient.php');

use WebSocket\Client as WSClient;

$client = new WSClient('wss://echo.websocket.org');

$client->send('Hello WebSocket!');

echo $client->receive() . PHP_EOL;
echo $client->receive();

$client->close();
