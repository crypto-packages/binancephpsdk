<?php

require_once __DIR__ . '/../../../../autoload.php';

use Binance\Token\Token;
use Binance\Client\BncClient;

$privateKey = 'afccb5311dc836f631aa6e86c5f4ff53b4de8580b1bd2f7da79f1cba910e5bff';
$bncClient = new BncClient('https://data-seed-pre-2-s1.binance.org');
$bncClient->chooseNetwork("testnet"); // or this can be "mainnet"
$bncClient->initChain();
$bncClient->setPrivateKey($privateKey);

$tokenClient = new Token($bncClient);
$response = $tokenClient->mintToken("tbnb1yqyppmev2m4z96r4svwtjq8eqp653pt6elq33r", "TBNB-457",  100);
var_dump($response);
?>