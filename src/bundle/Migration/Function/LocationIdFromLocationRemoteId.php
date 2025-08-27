<?php

namespace JL\IbexaEnhancedMigrations\Migration\Function;

use Ibexa\Core\Repository\Repository;

class LocationIdFromLocationRemoteId
{
    public function __construct(
        protected Repository $repository,
    ) {}

    public function __invoke(string $locationRemoteId): int
    {
        return $this->repository->getLocationService()->loadLocationByRemoteId($locationRemoteId)->getId();
    }
}
