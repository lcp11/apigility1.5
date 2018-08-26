<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace land\V1\Rest\Negocioland;
use Interop\Container\ContainerInterface;
use Zend\Db\TableGateway\AbstractTableGateway;
/**
 * Description of NegociolandRepositoryFactory
 *
 * @author terainfor
 */
class NegociolandRepositoryFactory {
    //put your code here
    public function __invoke($services) {
        return new NegociolandRepository($services->get('land\V1\Rest\Negocioland\NegociolandTable'));
    }
}
