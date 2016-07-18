<?php

namespace Shaygan\RecommenderIrBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface {

    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder() {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('shaygan_recommender_ir');


        $rootNode
                ->children()
                /**/->scalarNode("base_uri")->isRequired()->end()
                /**/->scalarNode("user_agent")->end()
                /**/->scalarNode("connect_timeout")->end()
                /**/->scalarNode("timeout")->end()
                ->end();


        return $treeBuilder;
    }

}
