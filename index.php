<?php 
require_once __DIR__.'/helper.php';


$USD_buying = Helper::banknoteBuying("USD", "buying");
$USD_selling = Helper::banknoteBuying("USD", "selling");

echo 'DOLAR ALIŞ KURU: ' . $USD_buying . "\n";
echo 'DOLAR SATIŞ KURU: ' . $USD_selling;