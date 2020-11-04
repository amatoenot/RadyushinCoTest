<?php

declare(strict_types=1);

namespace App\Service\Provider;

use App\Entity\Package;

class PochtaRossiiProvider implements ProviderInterface
{
    private const NAME = 'Почта России';

    public function getName(): string
    {
        return self::NAME;
    }

    public function calculateDeliveryCost(Package $package): float
    {
        if ($package->getWeight() <= 10) {
            return 100.0;
        }
        return 1000.0;
    }
}