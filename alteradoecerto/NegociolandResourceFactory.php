<?php
namespace land\V1\Rest\Negocioland;

class NegociolandResourceFactory
{
    public function __invoke($services)
    {
        return new NegociolandResource($services->get('land\V1\Rest\Negocioland\NegociolandService'));
    }
}
