<?php
class MineralRaro extends EntidadEstelar{

    protected $dureza;

    public function __construct($id, $nombre, $planetaOrigen, $nivelEstabilidad,$dureza)
    {
        parent::__construct($id, $nombre, $planetaOrigen, $nivelEstabilidad);
        $this->dureza=$dureza;
    }

    public function reaccion()
    {
        return "Brilla con intensidad azulada";
    }
    
    public function getTipo()
    {
        return "Mineral Raro";
    }


    /**
     * Get the value of dureza
     */
    public function getDureza()
    {
        return $this->dureza;
    }

    /**
     * Set the value of dureza
     */
    public function setDureza($dureza): self
    {
        $this->dureza = $dureza;

        return $this;
    }
}