<?php

namespace JL\IbexaEnhancedMigrations;

use JL\IbexaEnhancedMigrations\DependencyInjection\IbexaEnhancedMigrationsExtention;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class IbexaEnhancedMigrationsBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new IbexaEnhancedMigrationsExtention();
    }
}
