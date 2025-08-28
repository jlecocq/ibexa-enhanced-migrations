<?php

namespace JL\IbexaEnhancedMigrations\Migration\Function;

use Ibexa\Core\Repository\Repository;

class SectionIdFromSectionIdentifier
{
    public function __construct(
        protected Repository $repository,
    ) {}

    public function __invoke(string $sectionIdentifier): int
    {
        return $this->repository->getSectionService()->loadSectionByIdentifier($sectionIdentifier)->id;
    }
}
