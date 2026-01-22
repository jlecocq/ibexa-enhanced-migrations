<?php

namespace JL\IbexaEnhancedMigrations\Migration\Function;

use Ibexa\Core\Repository\Repository;

class LocationIdFromUserLogin
{
    public function __construct(
        protected Repository $repository,
    ) {}

    public function __invoke(string $login): int
    {
        return $this->repository->getUserService()->loadUserByLogin($login)->getContentInfo()->getMainLocation()->getId();
    }
}
