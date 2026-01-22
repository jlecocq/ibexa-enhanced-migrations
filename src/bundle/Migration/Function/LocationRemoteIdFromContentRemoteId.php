<?php

namespace JL\IbexaEnhancedMigrations\Migration\Function;

use Ibexa\Core\Repository\Repository;

class LocationRemoteIdFromContentRemoteId
{
    public function __construct(
        protected Repository $repository,
    ) {}

    public function __invoke(string $contentRemoteId): string
    {
        return $this->repository->getContentService()->loadContentByRemoteId($contentRemoteId)->getContentInfo()->getMainLocation()->remoteId;
    }
}
