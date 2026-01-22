<?php

namespace JL\IbexaEnhancedMigrations\Migration\Function;

use Ibexa\Core\Repository\Repository;

class ContentRemoteIdFromLocationRemoteId
{
    public function __construct(
        protected Repository $repository,
    ) {}

    public function __invoke(string $contentRemoteId): string
    {
        return $this->repository->getLocationService()->loadLocationByRemoteId($contentRemoteId)->getContentInfo()->remoteId;
    }
}
