<?php

declare(strict_types=1);

use App\Entity\Package;
use App\Service\Provider\DHLProvider;
use App\Service\Provider\PochtaRossiiProvider;
use App\Service\Provider\ProviderInterface;
use App\Service\ProviderRegistry\ProviderRegistry;

require_once 'vendor/autoload.php';

$providerRegistry = (new ProviderRegistry())
    ->addProvider(new PochtaRossiiProvider())
    ->addProvider(new DHLProvider());

$package = new Package(12);

$result = [];
/** @var ProviderInterface $provider */
foreach ($providerRegistry->getProviders() as $provider) {
    $result[$provider->getName()] = $provider->calculateDeliveryCost($package);
}

print_r($result);