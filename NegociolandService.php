<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace land\V1\Rest\Negocioland;

/**
 * Description of NegociolandService
 *
 * @author terainfor
 */
class NegociolandService {

    /**
     * @var NegociolandRepository
     */
    private $repository;

    //put your code here
    public function __construct(NegociolandRepository $repository) {
        
        $this->repository = $repository;
    }
}
