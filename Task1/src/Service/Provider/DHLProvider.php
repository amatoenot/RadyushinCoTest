<?php

declare(strict_types=1);

namespace App\Service\Provider;

use App\Entity\Package;

class DHLProvider implements ProviderInterface
{
    private const NAME = 'DHL';

    public function getName(): string
    {
        return self::NAME;
    }

    public function calculateDeliveryCost(Package $package): float
    {
        return 100.0 * $package->getWeight();
    }
}