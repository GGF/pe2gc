<?php
// Установим переменные необходимые для пакета vitexsoftware/primaerp
require __DIR__ . '/.env.php';

// автолоад после настроек, потому что они там используются... наверное
require __DIR__ . '/vendor/autoload.php';


$client   = new \primaERP\ApiClient(null,['section' => 'time']);
$timerecords = $client->requestData('timerecords?$filter=start ge datetime\'2020-05-07T00:00:00Z\'');
//?$top=2&skip=0
//$filter=start ge datetime'2020-05-07T00:00:00Z'

echo "<pre>";
foreach ($timerecords as $record ) {
    echo $record["task"]["name"]."\n";
}
//var_dump($timerecords);
