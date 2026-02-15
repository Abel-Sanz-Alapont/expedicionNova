<?php
class ArtefactoAntiguo extends EntidadEstelar{

    protected $antiguedad;

    public function __construct($id, $nombre, $planetaOrigen, $nivelEstabilidad,$antiguedad)
    {
        parent::__construct($id, $nombre, $planetaOrigen, $nivelEstabilidad);
        $this->antiguedad=$antiguedad;
    }

    public function reaccion()
    {
        return "Reproduce un mensaje en una lengua muerta";
    }
    
    public function getTipo()
    {
        return "Antiguedad(Años Luz)";
    }

}