<?php

namespace JL\IbexaEnhancedMigrations\Migration\Function;

use Ibexa\Core\Repository\Repository;

class LocationPathStringFromLocationRemoteId
{
    public function __construct(
        protected Repository $repository,
    ) {}

    public function __invoke(string $locationRemoteId): string
    {
        return $this->repository->getLocationService()->loadLocationByRemoteId($locationRemoteId)->getPathString();
    }
}
