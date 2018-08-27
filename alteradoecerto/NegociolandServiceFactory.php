<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace land\V1\Rest\Negocioland;
use Interop\Container\ContainerInterface;
/**
 * Description of NegociolandServiceFactory
 *
 * @author terainfor
 */
class NegociolandServiceFactory {
    //put your code here
    public function __invoke(ContainerInterface $container) {
        return new NegociolandService($container->get('land\V1\Rest\Negocioland\NegociolandRepository'));
    }
}
