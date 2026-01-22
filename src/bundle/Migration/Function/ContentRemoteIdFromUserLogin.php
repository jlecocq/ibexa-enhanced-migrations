<?php

namespace JL\IbexaEnhancedMigrations\Migration\Function;

use Ibexa\Core\Repository\Repository;

class ContentRemoteIdFromUserLogin
{
    public function __construct(
        protected Repository $repository,
    ) {}

    public function __invoke(string $login): string
    {
        return $this->repository->getUserService()->loadUserByLogin($login)->getContentInfo()->remoteId;
    }
}
