<?php

declare(strict_types=1);

namespace App\Service\ProviderRegistry;

use App\Service\Provider\ProviderInterface;

class ProviderRegistry
{
    /**
     * @var array
     */
    private $providers;

    /**
     * @return array
     */
    public function getProviders(): array
    {
        return $this->providers;
    }

    /**
     * @param ProviderInterface $provider
     * @return $this
     */
    public function addProvider(ProviderInterface $provider): self
    {
        $this->providers[] = $provider;
        return $this;
    }
}