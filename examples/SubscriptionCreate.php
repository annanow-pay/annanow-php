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

$subscription = new \Annanow\Models\Request\Subscription();
$subscription->setUserId(1);
$subscription->setPsp(4);
$subscription->setPurpose('Test');
$subscription->setAmount(100);
$subscription->setCurrency('CHF');
$subscription->setPaymentInterval('P1M');
$subscription->setPeriod('P1Y');
$subscription->setCancellationInterval('P1M');
try {
    $response = $annanow->create($subscription);
    var_dump($response);
} catch (\Annanow\AnnanowException $e) {
    print $e->getMessage();
}
