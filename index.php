<?php 
session_start();
ob_start();
require_once __DIR__.'/helper.php';


$USD_buying  = Helper::banknoteBuying("USD", "buying");
$USD_selling = Helper::banknoteBuying("USD", "selling");

print Helper::jsonResponse(["USD Alış : ".$USD_buying, "USD Satış :".$USD_selling]);

