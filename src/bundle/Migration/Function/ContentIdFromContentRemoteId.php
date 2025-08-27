<?php

namespace JL\IbexaEnhancedMigrations\Migration\Function;

use Ibexa\Core\Repository\Repository;

class ContentIdFromContentRemoteId
{
    public function __construct(
        protected Repository $repository,
    ) {}

    public function __invoke(string $contentRemoteId): int
    {
        return $this->repository->getContentService()->loadContentByRemoteId($contentRemoteId)->getId();
    }
}
