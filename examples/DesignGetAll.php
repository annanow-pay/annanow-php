<?php

use Annanow\Models\Request\Design;
use Annanow\Annanow;
use Annanow\AnnanowException;

spl_autoload_register(function ($class) {
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

$annanow = new Annanow($instanceName, $secret);

$design = new Design();
$design->setLimit(1);
$design->setOffset(2);
try {
    $response = $annanow->getAll($design);
    var_dump($response);
} catch (AnnanowException $e) {
    print $e->getMessage();
}
