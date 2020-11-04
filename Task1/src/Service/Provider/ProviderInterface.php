<?php

declare(strict_types=1);

namespace App\Service\Provider;

use App\Entity\Package;

interface ProviderInterface
{
    public function getName(): string;

    public function calculateDeliveryCost(Package $package): float;
}