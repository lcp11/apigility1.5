<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace land\V1\Rest\Negocioland;

/**
 * Description of NegociolandRepository
 *
 * @author terainfor
 */
class NegociolandRepository {

    /**
     * @var NegociolandTableGateway
     */
    private $tableGateway;

    //put your code here
    public function __construct(NegociolandTableGateway $tableGateway) {
        
        $this->tableGateway = $tableGateway;
    }
}
