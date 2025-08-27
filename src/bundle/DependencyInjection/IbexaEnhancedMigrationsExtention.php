<?php

namespace JL\IbexaEnhancedMigrations\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader;

class IbexaEnhancedMigrationsExtention extends Extension
{
    public function getAlias(): string
    {
        return 'ibexa_enhanced_migrations';
    }

    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yaml');
        $loader->load('custom_functions.yaml');
    }
}