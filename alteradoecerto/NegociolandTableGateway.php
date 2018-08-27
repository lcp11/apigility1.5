<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace land\V1\Rest\Negocioland;

use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Description of NegociolandTableGateway
 *
 * @author terainfor
 */
class NegociolandTableGateway implements FactoryInterface{
    //put your code here
    
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null) {
        $dbadapter = $container->get('dummy');
        $resultSetPrototype = new HydratingResultSet(new ClassMethods(), new NegociolandEntity());
        return new TableGateway('negocio', $dbadapter, null, $resultSetPrototype);
    }
}
