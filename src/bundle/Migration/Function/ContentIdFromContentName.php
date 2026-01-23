<?php

namespace JL\IbexaEnhancedMigrations\Migration\Function;

use eZ\Publish\API\Repository\Values\Content\Query;
use Ibexa\Contracts\Core\Repository\Values\Content\Query\Criterion\ContentName;
use Ibexa\Core\Repository\Repository;

class ContentIdFromContentName
{
    public function __construct(
        protected Repository $repository,
    ) {}

    public function __invoke(string $contentName): int
    {
        $query = new Query();
        $query->filter = new ContentName($contentName);
        $query->limit = 1;

        $result = $this->repository->getSearchService()->findContent($query);
        if ($result->totalCount !== 1) {
            throw new \Exception("Migration function ContentIdFromContentName must return only 1 result for content name '$contentName'.");
        }

        return $result->searchHits[0]->valueObject->getId();
    }
}
