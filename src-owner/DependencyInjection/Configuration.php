<?php declare(strict_types=1);

namespace Owner\TestBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('owner_test');
        $treeBuilder->getRootNode()
            ->children()
            ->booleanNode('isDisplay')->defaultTrue()->end()
            ->booleanNode('someBoolean')->defaultTrue()->end()
            ->end()
        ;
        return $treeBuilder;
    }
}