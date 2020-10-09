<?php declare(strict_types=1);

namespace Owner\TestBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class OwnerTestExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        // Has what is in config/packages/owner_test.yaml
        dump($configs);

        $configuration = new Configuration();

        $config = $this->processConfiguration($configuration, $configs);
        dump($config);

        // At this point you would use $config to define your parameters or services

    }
}