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


    /**
     * Get the value of dieta
     */
    public function getDieta()
    {
        return $this->dieta;
    }

    /**
     * Set the value of dieta
     */
    public function setDieta($dieta): self
    {
        $this->dieta = $dieta;

        return $this;
    }
}