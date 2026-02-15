<?php
class FormadeVida extends EntidadEstelar{

    protected $dieta;

    public function __construct($id, $nombre, $planetaOrigen, $nivelEstabilidad,$dieta)
    {
        parent::__construct($id, $nombre, $planetaOrigen, $nivelEstabilidad);
        $this->dieta=$dieta;
    }

    public function reaccion()
    {
        return "Emite un pulso electromagnético";
    }
    
    public function getTipo()
    {
        return "Forma de Vida";
    }

}