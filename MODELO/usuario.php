
<?php
class usuario 
{
    private $correo;
    private $run;
    private $nombre;
    private $fec_nac;
    private $telefono;
    private $region;
    private $ciudad;
    private $vivienda;
    
    function __construct() {}

    //Getters
    function getCorreo() {
        return $this->correo;
    }

    function getRun() {
        return $this->run;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getFecnac() {
        return $this->fec_nac;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getRegion() {
        return $this->region;
    }

    function getCiudad() {
        return $this->ciudad;
    }

    function getVivienda() {
        return $this->vivienda;
    }

    //Setters 
    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setRun($run) {
        $this->run = $run;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setFecnac($fec_nac) {
        $this->fec_nac = $fec_nac;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
    
    function setRegion($region) {
        $this->region = $region;
    }

    function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    function setVivienda($vivienda) {
        $this->vivienda = $vivienda;
    }
}
