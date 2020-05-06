<?php
// Установим переменные необходимые для пакета vitexsoftware/primaerp
require __DIR__ . '/.env.php';

// автолоад после настроек, потому что они там используются... наверное
require __DIR__ . '/vendor/autoload.php';


$client   = new \primaERP\ApiClient(null,['section' => 'time']);
$timerecords = $client->requestData('timerecords');


echo "<pre>";
var_dump($timerecords);
