<?php
namespace land\V1\Rest\Negocioland;

class NegociolandEntity
{
    protected $idnegocio;
    protected $sobre;
    protected $mecado;
    protected $youtube;
    protected $data;
    protected $modelo;
    
    function getIdnegocio() {
        return $this->idnegocio;
    }

    function getSobre() {
        return $this->sobre;
    }

    function getMecado() {
        return $this->mecado;
    }

    function getYoutube() {
        return $this->youtube;
    }

    function getData() {
        return $this->data;
    }

    function getModelo() {
        return $this->modelo;
    }

    function setIdnegocio($idnegocio) {
        $this->idnegocio = $idnegocio;
        return $this;
    }

    function setSobre($sobre) {
        $this->sobre = $sobre;
        return $this;
    }

    function setMecado($mecado) {
        $this->mecado = $mecado;
        return $this;
    }

    function setYoutube($youtube) {
        $this->youtube = $youtube;
        return $this;
    }

    function setData($data) {
        $this->data = $data;
        return $this;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
        return $this;
    }


}
