<?php

/**
 * Class Departamento
 *
 * Clase utilizada para instanciar objetos 'Departamento'
 * 
 * @author Rodrigo Robles Miñambres
 * @copyright 01-03-2021
 * @version 1.0
 */
class Departamento {
    private $codDepartamento;
    private $descDepartamento;
    private $fechaCreacion;
    private $volumenNegocio;
    private $fechaBaja;
    
    function __construct($codDepartamento, $descDepartamento, $fechaCreacion, $volumenNegocio, $fechaBaja) {
        $this->codDepartamento = $codDepartamento;
        $this->descDepartamento = $descDepartamento;
        $this->fechaCreacion = $fechaCreacion;
        $this->volumenNegocio = $volumenNegocio;
        $this->fechaBaja = $fechaBaja;
    }

    function getCodDepartamento() {
        return $this->codDepartamento;
    }

    function getDescDepartamento() {
        return $this->descDepartamento;
    }

    function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    function getVolumenNegocio() {
        return $this->volumenNegocio;
    }

    function getFechaBaja() {
        return $this->fechaBaja;
    }

    function setCodDepartamento($codDepartamento): void {
        $this->codDepartamento = $codDepartamento;
    }

    function setDescDepartamento($descDepartamento): void {
        $this->descDepartamento = $descDepartamento;
    }

    function setFechaCreacion($fechaCreacion): void {
        $this->fechaCreacion = $fechaCreacion;
    }

    function setVolumenNegocio($volumenNegocio): void {
        $this->volumenNegocio = $volumenNegocio;
    }

    function setFechaBaja($fechaBaja): void {
        $this->fechaBaja = $fechaBaja;
    }


}
