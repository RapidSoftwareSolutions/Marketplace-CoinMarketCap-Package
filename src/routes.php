<?php
$routes = [
    'metadata',
    'getCryptocurrenciesList',
    'getCryptocurrency',
    'getGlobalData'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

