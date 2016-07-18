<?php

/**
 * Description of Recommender
 *
 * @author iman
 */

namespace Shaygan\RecommenderIrBundle;

use Symfony\Component\DependencyInjection\Container;
use Evand\Recommenderir\Client;

class Recommender extends Client {

    public function __construct(Container $container) {
        $config = $container->getParameter('shaygan_recommender.config');

        parent::__construct($config);
    }

}
