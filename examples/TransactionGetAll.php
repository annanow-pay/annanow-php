<?php

spl_autoload_register(function($class) {
    $root = dirname(__DIR__);
    $classFile = $root . '/lib/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($classFile)) {
        require_once $classFile;
    }
});

// $instanceName is a part of the url where you access your annanow installation.
// https://{$instanceName}.annanow-pay.com
$instanceName = 'YOUR_INSTANCE_NAME';

// $secret is the annanow secret for the communication between the applications
// if you think someone got your secret, just regenerate it in the annanow administration
$secret = 'YOUR_SECRET';

$annanow = new \Annanow\Annanow($instanceName, $secret);

$transaction = new \Annanow\Models\Request\Transaction();
$transaction->setFilterDatetimeUtcGreaterThan(new \DateTime('2019-12-01 00:00:00'));
$transaction->setFilterDatetimeUtcLessThan(new \DateTime('2020-10-01 00:00:00'));
$transaction->setOffset(40);
$transaction->setLimit(20);

try {
    $response = $annanow->getAll($transaction);
    var_dump($response);
} catch (\Annanow\AnnanowException $e) {
    print $e->getMessage();
}
