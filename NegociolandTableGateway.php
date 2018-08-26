<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace land\V1\Rest\Negocioland;

use Interop\Container\ContainerInterface;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;

/**
 * Description of NegociolandTableGateway
 *
 * @author terainfor
 */
class NegociolandTableGateway {
    //put your code here
    
    public function __invoke(ContainerInterface $container) {
        $dbadapter = $container->get(AdapterInterface::class);
        $resultSetPrototype = new ResultSet();
        $resultSetPrototype->setArrayObjectPrototype(new NegociolandEntity());
        return new TableGateway('dummy', $dbadapter, null, $resultSetPrototype);
    }
}
